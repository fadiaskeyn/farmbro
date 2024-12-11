<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="flex min-w-full min-h-screen">
        <!-- Sidebar -->
        <div class="w-56 min-h-screen text-white bg-customBrown">
            <div class="p-4">
                <h1 class="text-2xl font-bold">FARMBRO</h1>
            </div>
            <ul class="mt-4">
                <!-- Navigation items -->
                <li class="mb-4">
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('svg/dashboard.svg') }}" alt="Dashboard Icon">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('user.index') }}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('svg/pekerja.svg') }}" alt="Pekerja Icon">
                        <span>Pekerja</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route ('bloging.index')}}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('image/blog.svg') }}" alt="Blog Icon">
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('video.index') }}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('image/loupe.png') }}" alt="Laporan Icon">
                        <span>Deteksi</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-1 bg-gray-100">
            @include('layouts.navigation')
            <div class="container h-auto p-6 mx-auto bg-white rounded-lg shadow-lg">
                <header class="bg-white shadow">
                    <!-- Page Heading -->
                    @if (isset($header))
                    <div class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif

                <main>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-3 p-4 bg-red-100 rounded-lg">
                            <p class="font-semibold text-red-700">Total Ayam</p>
                            <p id="total-ayam" class="mt-2 text-4xl font-bold text-red-700">wait....</p>
                        </div>
                        <div class="col-span-3 p-4 rounded-lg bg-lime-50">
                            <p class="font-semibold text-green-500">Suhu</p>
                            <p id="suhu" class="mt-2 text-4xl font-bold text-green-600">wait....</p>
                        </div>
                        <div class="col-span-3 p-6 rounded-lg shadow-lg bg-blue-50">
                            <p class="font-semibold text-blue-500">Kelembapan</p>
                            <p id="kelembapan" class="mt-2 text-4xl font-bold text-blue-600">wait....</p>
                        </div>
                        <div class="col-span-3 p-6 bg-green-100 rounded-lg shadow-md">
                            <p class="font-semibold text-green-500">Gas Amonia</p>
                            <p id="gas-amonia" class="mt-2 text-4xl font-bold text-green-600">wait....</p>
                        </div>
                    </div>
                    <!-- Chart -->
                    <div class="container py-10 mx-auto shadow-md">
                        <div class="px-5 bg-white rounded-lg shadow-inner">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </main>

            </div>
            <div class="flex justify-between mx-8 mt-4 mb-4 text-gray-600">
                <span>FARMBRO</span>
                <span>PETERNAKAN AYAM BROILER</span>
            </div>
        </div>
    </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    async function ayam() {
        const response = await axios.get('http://localhost:8000/api/chick');

        if (response.data.status === 200) {
            const data = response.data.data;
            document.getElementById('total-ayam').textContent = `${data.amount}`;
        } else {
            console.error("Error fetching data:", response.data.message);
        }
    }
    // Fungsi untuk fetch data dari API
    async function fetchData() {
        try {
            const response = await axios.get('http://localhost:8000/api/gas');

            if (response.data.status === 200) {
                const data = response.data.data;

                // Update elemen HTML dengan data yang diterima
                document.getElementById('total-ayam').textContent = "15"; // Ganti dengan data relevan jika ada
                document.getElementById('suhu').textContent = `${data.temperature} °C`;
                document.getElementById('kelembapan').textContent = `${data.humidity} %`;
                document.getElementById('gas-amonia').textContent = `${data.amonia} ppm`;
            } else {
                console.error("Error fetching data:", response.data.message);
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    // Panggil fungsi fetch data saat halaman dimuat
    fetchData();
    ayam();
</script>

