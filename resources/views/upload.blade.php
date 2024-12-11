<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOLO Detection</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        h2 {
            color: #555;
            margin-top: 30px;
        }

        form {
            margin: 20px 0;
        }

        input[type="file"],
        input[type="number"],
        button {
            display: block;
            width: 100%;
            max-width: 400px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }

        video {
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .loading {
            font-size: 18px;
            color: #007bff;
            margin-top: 20px;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .result p {
            font-size: 16px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Video for YOLO Detection</h1>

        <!-- Form to update cage area -->
        <form action="{{ route('video.updateCageArea') }}" method="POST">
            @csrf
            <label for="cageArea">Luas Kandang (m²):</label>
            <input type="number" name="cageArea" value="{{ session('cageArea', 1) }}" required min="1">
            <button type="submit">Update Luas Kandang</button>
        </form>

        <!-- Form to upload video -->
        <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="video" required>
            <button type="submit">Upload Video</button>
        </form>

        @if (isset($videoUrl) && isset($totalChickens))
            <div class="result">
                <h2>Detection Result</h2>
                <p><strong>Total Chickens Detected:</strong> {{ $totalChickens }}</p>
                <p><strong>Density:</strong> {{ session('chickenDensity', 0) }} chickens/m²</p>
                <p><strong>Density Category:</strong> {{ session('densityCategory', 'Normal') }}</p>
                <video controls>
                    <source src="{{ $videoUrl }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @else
            <p>No video uploaded yet. Please upload a video to start detection.</p>
        @endif
    </div>
</body>
</html>
