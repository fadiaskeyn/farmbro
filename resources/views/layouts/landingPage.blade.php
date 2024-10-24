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

    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

    @include('partials.navbar2')

    @yield('content')
    @include('partials.body')

    @include('partials.footer')
</body>
</html>
