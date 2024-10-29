      <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen min-w-full flex">
            <!-- Sidebar -->
            <div class="w-56 bg-customBrown text-white min-h-screen">
                <div class="p-4">
                    <h1 class="text-2xl font-bold">FARMBRO</h1>
                </div>
                <ul class="mt-4">
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                            <img class="w-6 h-6 mr-2" src="{{ asset('svg/dashboard.svg') }}" alt="Dashboard Icon">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                            <img class="w-6 h-6 mr-2" src="{{ asset('svg/pekerja.svg') }}" alt="Pekerja Icon">
                            <span>Pekerja</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                            <img class="w-6 h-6 mr-2" src="{{ asset('svg/laporan.svg    ') }}" alt="Laporan Icon">
                            <span>Laporan</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="flex-1 bg-gray-100">
                @include('layouts.navigation')
                <div class="container mx-auto p-6 h-auto bg-white rounded-lg shadow-lg">

                    <header class="bg-white shadow">
                <!-- Page Heading -->
                @if (isset($header))
                        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    <!-- Statistic Cards -->
                    <div class="grid grid-cols-12 gap-4">
                        <!-- Total Ayam Mati -->
                        <div class="col-span-3 bg-gray-200 p-4">
                            <p class="text-red-500 font-semibold">Total Ayam</p>
                            <p class="text-4xl font-bold text-red-600 mt-2">80</p>
                        </div>

                        <!-- Suhu -->
                        <div class="col-span-3 bg-red-700 p-4">
                            <p class="text-green-500 font-semibold">Suhu</p>
                            <p class="text-4xl font-bold text-green-600 mt-2">13%</p>
                        </div>

                        <!-- Kelembapan -->
                        <div class="col-span-3 bg-blue-100 p-6 rounded-lg shadow-md">
                            <p class="text-blue-500 font-semibold">Kelembapan</p>
                            <p class="text-4xl font-bold text-blue-600 mt-2">20%</p>
                        </div>

                        <!-- Gas Amonia -->
                        <div class="col-span-3 bg-green-100 p-6 rounded-lg shadow-md">
                            <p class="text-green-500 font-semibold">Gas Amonia</p>
                            <p class="text-4xl font-bold text-green-600 mt-2">200</p>
                        </div>
                    </div>
                    <div>
                        <canvas id="myChart"></canvas>
                      </div>
                    </main>
                </div>
                <div class="mt-4 mb-4 text-gray-600 flex justify-between mx-8">
                    <span>FARMBRO</span>
                    <span>PETERNAKAN AYAM BROILER</span>
                  </div>
            </div>
        </div>
    </body>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                      <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                          type: 'bar',
                          data: {
                            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                            datasets: [{
                              label: '# of Votes',
                              data: [5, 5, 5, 5, 2, 3],
                              borderWidth: 1
                            }]
                          },
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                      </script>
                      </html>
