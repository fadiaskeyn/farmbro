<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function index()
    {
        // Get the total chickens and cage area from the session, default values if not set
        $totalChickens = Session::get('totalChickens', 0);
        $cageArea = Session::get('cageArea', 1); // Default to 1 m² to avoid division by zero
        $densityCategory = $this->getDensityCategory($totalChickens, $cageArea);

        return view('upload', compact('totalChickens', 'cageArea', 'densityCategory'));
    }

    public function uploadVideo(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,avi,mov|max:100000',  // Maksimal 100MB
        ]);

        // Reset total chickens, cage area, and density to 0 when uploading a new video
        Session::put('totalChickens', 0);
        Session::put('cageArea', 1);
        Session::put('chickenDensity', 0);

        $video = $request->file('video');
        $path = $video->store('videos', 'public');

        set_time_limit(300);

        try {
            $videoPath = public_path('storage/videos/' . basename($path));
            $modelPath = base_path('app/yolo/best.pt');
            $scriptPath = base_path('app/yolo/yolo.py');

            $outputFileName = pathinfo($path, PATHINFO_FILENAME) . '_detections.mp4';
            $outputPath = storage_path('app/public/videos/' . $outputFileName);
            $progressFile = storage_path('app/public/progress.txt');

            $command = escapeshellcmd("python $scriptPath $videoPath $modelPath $outputPath $progressFile");
            shell_exec($command);

            if (!File::exists($outputPath)) {
                throw new \Exception("Output video file not generated: $outputPath");
            }

            $progressContent = File::get($progressFile);
            preg_match('/Total chickens detected: (\d+)/', $progressContent, $matches);
            $totalChickens = isset($matches[1]) ? $matches[1] : 0;

            $cageArea = Session::get('cageArea', 1);
            $chickenDensity = $totalChickens / $cageArea;
            $densityCategory = $this->getDensityCategory($totalChickens, $cageArea);

            Session::put('videoPath', basename($path));
            Session::put('outputFileName', $outputFileName);
            Session::put('totalChickens', $totalChickens);
            Session::put('cageArea', $cageArea);
            Session::put('chickenDensity', $chickenDensity);

            $videoUrl = asset('storage/videos/' . basename($outputPath)) . '?t=' . time();

            return view('upload', [
                'videoPath' => $path,
                'status' => 'finished',
                'outputVideoPath' => $outputFileName,
                'videoUrl' => $videoUrl,
                'totalChickens' => $totalChickens,
                'cageArea' => $cageArea,
                'chickenDensity' => $chickenDensity,
                'densityCategory' => $densityCategory,
            ]);
        } catch (\Exception $e) {
            Log::error("Error: " . $e->getMessage());
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function updateCageArea(Request $request)
    {
        $request->validate([
            'cageArea' => 'required|numeric|min:1',
        ]);

        $cageArea = $request->input('cageArea');
        $totalChickens = Session::get('totalChickens', 0);
        $chickenDensity = $totalChickens / $cageArea;
        $densityCategory = $this->getDensityCategory($totalChickens, $cageArea);

        Session::put('cageArea', $cageArea);
        Session::put('chickenDensity', $chickenDensity);

        return redirect()->back()->with([
            'cageArea' => $cageArea,
            'chickenDensity' => $chickenDensity,
            'densityCategory' => $densityCategory,
        ]);
    }

    private function getDensityCategory($totalChickens, $cageArea)
    {
        $density = $totalChickens / $cageArea;

        if ($density <= 5) {
            return 'Normal';
        } elseif ($density <= 10) {
            return 'Padat';
        } else {
            return 'Sangat Padat';
        }
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Session;

// class VideoController extends Controller
// {
//     public function uploadVideo(Request $request)
//     {
//         $request->validate([
//             'video' => 'required|mimes:mp4,avi,mov|max:100000', // Maksimal 100MB
//         ]);

//         // Luas kandang default di backend (contoh: 10 m²)
//         $cageArea = 10;

//         $video = $request->file('video');
//         $path = $video->store('videos', 'public');

//         set_time_limit(300);

//         try {
//             // Path video dan model YOLO
//             $videoPath = public_path('storage/videos/' . basename($path));
//             $modelPath = base_path('app/yolo/best.pt');
//             $scriptPath = base_path('app/yolo/yolo.py');

//             $outputFileName = pathinfo($path, PATHINFO_FILENAME) . '_detections.mp4';
//             $outputPath = storage_path('app/public/videos/' . $outputFileName);
//             $progressFile = storage_path('app/public/progress.txt');

//             // Jalankan YOLO processing
//             $command = escapeshellcmd("python $scriptPath $videoPath $modelPath $outputPath $progressFile");
//             shell_exec($command);

//             if (!File::exists($outputPath)) {
//                 throw new \Exception("Output video file not generated: $outputPath");
//             }

//             // Baca hasil deteksi dari progress file
//             $progressContent = File::get($progressFile);
//             preg_match('/Total chickens detected: (\d+)/', $progressContent, $matches);
//             $totalChickens = isset($matches[1]) ? (int)$matches[1] : 0;

//             // Hitung kepadatan berdasarkan luas kandang
//             $chickenDensity = $totalChickens / $cageArea;

//             // Tentukan kategori kepadatan
//             $densityCategory = 'Normal';
//             if ($chickenDensity > 5 && $chickenDensity <= 10) {
//                 $densityCategory = 'Padat';
//             } elseif ($chickenDensity > 10) {
//                 $densityCategory = 'Sangat Padat';
//             }

//             // Simpan hasil ke session
//             Session::put('videoPath', basename($path));
//             Session::put('outputFileName', $outputFileName);
//             Session::put('totalChickens', $totalChickens);
//             Session::put('chickenDensity', $chickenDensity);

//             // URL video hasil deteksi
//             $videoUrl = asset('storage/videos/' . basename($outputPath)) . '?t=' . time();

//             // Kirim hasil ke view
//             return view('upload', [
//                 'videoPath' => $path,
//                 'status' => 'finished',
//                 'outputVideoPath' => $outputFileName,
//                 'videoUrl' => $videoUrl,
//                 'totalChickens' => $totalChickens,
//                 'chickenDensity' => $chickenDensity,
//                 'densityCategory' => $densityCategory,
//             ]);
//         } catch (\Exception $e) {
//             Log::error("Error: " . $e->getMessage());
//             return response()->json(['error' => $e->getMessage()]);
//         }
//     }

//     public function showUploadForm()
//     {
//         return view('upload', ['status' => null]);
//     }
// }
