<?php

namespace App\Http\Controllers\api;

use Carbon\Carbon;
use App\Models\Gas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GasApiController extends Controller
{
    public function dashboard () {
        $gas = Gas::latest()->first();
        return response()->json([
            "status" => 200,
            "data" => $gas
        ]);
    }

    public function store(Request $request){
        $request->validate([
            "humidity" => "required|numeric",
            "temperature" => "required|numeric",
            "amonia" => "required|numeric"
        ]);
        $gas = Gas::create([
            "humidity" => $request->humidity,
            "temperature" => $request->temperature,
            "amonia" => $request->amonia
        ]);
        return response()->json([
            "status" => 200,
            "data" => $gas
        ]);

    }


    public function average()
    {
        $twelveHoursAgo = Carbon::now()->subHours(12);
        $data = DB::table('gases')
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d %H:00:00") as hour'), // Grup berdasarkan jam
                DB::raw('AVG(amonia) as avg_amonia'),                           // Rata-rata amonia
                DB::raw('AVG(humidity) as avg_humidity'),                       // Rata-rata humidity
                DB::raw('AVG(temperature) as avg_temperature')                  // Rata-rata temperature
            )
            ->where('created_at', '>=', $twelveHoursAgo) // Hanya data dalam 12 jam terakhir
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d %H:00:00")')) // Grup per jam
            ->orderBy('hour', 'asc') // Urutkan berdasarkan jam
            ->get();

        // Mengembalikan data dalam format JSON
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }

    public function chart()
    {
        $oneHourAgo = Carbon::now()->subHour();

        // Ambil rata-rata data dari satu jam terakhir
        $recentData = DB::table('gases')
            ->select(
                DB::raw('AVG(amonia) as avg_amonia'),
                DB::raw('AVG(humidity) as avg_humidity'),
                DB::raw('AVG(temperature) as avg_temperature')
            )
            ->where('created_at', '>=', $oneHourAgo)
            ->first();

        if ($recentData->avg_amonia === null || $recentData->avg_humidity === null || $recentData->avg_temperature === null) {
            // Jika tidak ada data, buat dummy dari data historis sebelumnya
            $historicalData = DB::table('gases')
                ->select(
                    DB::raw('AVG(amonia) as avg_amonia'),
                    DB::raw('AVG(humidity) as avg_humidity'),
                    DB::raw('AVG(temperature) as avg_temperature')
                )
                ->get();

            $dummyData = [
                'humidity' => round($historicalData[0]->avg_humidity ?? 50, 1),
                'temperature' => round($historicalData[0]->avg_temperature ?? 24, 1),
                'amonia' => round($historicalData[0]->avg_amonia ?? 9, 1),
            ];
        } else {
            // Jika ada data, gunakan data rata-rata dari satu jam terakhir
            $dummyData = [
                'humidity' => round($recentData->avg_humidity, 1),
                'temperature' => round($recentData->avg_temperature, 1),
                'amonia' => round($recentData->avg_amonia, 1),
            ];
        }

        return response()->json([
            'status' => 200,
            'data' => $dummyData
        ]);
    }





}
