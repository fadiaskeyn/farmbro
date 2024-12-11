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
                {{-- <li class="mb-4">
                    <a href="#" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('image/chart.svg') }}" alt="Laporan Icon">
                        <span>Laporan</span>
                    </a>
                </li> --}}
                <li class="mb-4">
                    <a href="{{ route ('bloging.index')}}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                        <img class="w-6 h-6 mr-2" src="{{ asset('image/blog.svg') }}" alt="Blog Icon">
                        <span>Blog</span>
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
                        @if (isset($chickData) && !empty($chickData))
                        <div class="col-span-3 p-4 bg-red-100 rounded-lg">
                            <p class="font-semibold text-red-700">Total Ayam</p>
                            <p class="mt-2 text-4xl font-bold text-red-700">{{ $chickData['amount'] ?? 'N/A' }}</p>
                        </div>
                        @endif

                        @if (isset($gasData) && !empty($gasData))
                        <div class="col-span-3 p-4 rounded-lg bg-lime-50">
                            <p class="font-semibold text-green-500">Suhu</p>
                            <p class="mt-2 text-4xl font-bold text-green-600">{{ $gasData['temperature'] ?? 'N/A' }} °C</p>
                        </div>
                        <div class="col-span-3 p-6 rounded-lg shadow-lg bg-blue-50">
                            <p class="font-semibold text-blue-500">Kelembapan</p>
                            <p class="mt-2 text-4xl font-bold text-blue-600">{{ $gasData['humidity'] ?? 'N/A' }}%</p>
                        </div>
                        <div class="col-span-3 p-6 bg-green-100 rounded-lg shadow-md">
                            <p class="font-semibold text-green-500">Gas Amonia</p>
                            <p class="mt-2 text-4xl font-bold text-green-600">{{ $gasData['amonia'] ?? 'N/A' }} ppm</p>
                        </div>
                        @else
                        <p class="col-span-3 text-red-500">Data tidak tersedia.</p>
                        @endif
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

    {{-- <script>
        async function fetchData() {
            try {
                const response = await fetch('https://farmbro-mbkm.research-ai.my.id/api/gas');
                const apiResponse = await response.json();

                if (apiResponse.status === 200 && apiResponse.data) {
                    const data = apiResponse.data;
                    return {
                        labels: ['Temperature', 'Humidity', 'Ammonia'],
                        values: [data.temperature, data.humidity, data.amonia],
                        createdAt: new Date(data.created_at).toLocaleString()
                    };
                } else {
                    console.error("Invalid API response:", apiResponse);
                    return { labels: [], values: [], createdAt: '' };
                }
            } catch (error) {
                console.error("Error fetching data:", error);
                return { labels: [], values: [], createdAt: '' };
            }
        }

        async function createChart() {
            const ctx = document.getElementById('myChart').getContext('2d');
            const apiData = await fetchData();

            if (apiData.labels.length === 0) {
                console.error("No data available for the chart");
                return;
            }

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: apiData.labels,
                    datasets: [{
                        label: `Sensor Data (${apiData.createdAt})`,
                        data: apiData.values,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 99, 132, 0.5)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true, position: 'top' }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: { display: true, text: 'Values' }
                        },
                        x: {
                            title: { display: true, text: 'Parameters' }
                        }
                    }
                }
            });
        }

        createChart();
    </script> --}}
</body>
</html>
