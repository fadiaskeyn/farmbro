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
        <div class="min-h-screen bg-gray-100 flex">
            <!-- Sidebar -->
            <div class="w-64 bg-customBrown text-white min-h-screen">
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
            <div class="flex-1">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
