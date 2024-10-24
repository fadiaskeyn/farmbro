<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FarmBro')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="flex flex-col h-screen bg-gray-100">
    <!-- Include the Navbar -->
    @include('partials.navbar')
    <div class="flex-grow">
        <div class="px-6 py-12 mt-12 text-center">
            <h1 class="mb-6 text-5xl font-bold font-display">THE Contact</h1>
            <p class="max-w-lg mx-auto"></p>
        </div>
    </div>

    @include('partials.footer')

</body>

