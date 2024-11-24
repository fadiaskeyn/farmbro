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
        <div class="flex min-w-full min-h-screen">
            <!-- Sidebar -->
            <div class="w-56 min-h-screen text-white bg-customBrown">
                <div class="p-4">
                    <h1 class="text-2xl font-bold">FARMBRO</h1>
                </div>
                <ul class="mt-4">
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
                        <a href="#" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                            <img class="w-6 h-6 mr-2" src="{{ asset('image/chart.svg') }}" alt="Laporan Icon">
                            <span>Laporan</span>
                        </a>
                    </li>
                     <li class="mb-4">
                        <a href="{{route ('bloging.index')}}" class="flex items-center p-2 text-sm font-medium rounded hover:bg-brown-500">
                            <img class="w-6 h-6 mr-2" src="{{ asset('image/blog.svg') }}" alt="Laporan Icon">
                            <span>Blog</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="flex-1 bg-gray-100">
                @include('layouts.navigation')
                <div class="container h-screen p-6 mx-auto bg-white rounded-lg shadow-lg">

                    <header class="bg-white shadow">
                <!-- Page Heading -->
                @if (isset($header))
                        <div class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                        {{ $slot }}
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
