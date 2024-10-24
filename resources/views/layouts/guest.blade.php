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
    <body class="font-sans text-gray-900 antialiased sm:rounded-lg">
        <div class="flex flex-col min-h-screen md:flex-row">
            <!-- Bagian Gambar -->
            <div class="w-1/2 relative bg-cover bg-center" style="background-image: url('{{ asset('img/bgayamrill.png') }}')">
            </div>
            <!-- Bagian Form Login -->
            <div class="flex flex-col justify-center items-center relative md:w-1/2">
                <div class="hidden h-ful absolute rounded-l-3xl w-10 top-0 bottom-0 -left-9 bg-white md:block"></div>
                <div class="w-full sm:max-w-md px-6 py-4 bg-white sm:rounded-none">
                    <h2 class="text-2xl font-bold text-center mb-4">SELAMAT DATANG<br>SILAKAN LOGIN</h2>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
