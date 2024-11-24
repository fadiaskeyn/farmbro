<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('partials.navbar')

    <main class="container max-w-4xl px-4 py-16 mx-auto bg-white rounded-lg shadow mt-14">
        <h1 class="mb-6 text-4xl font-bold text-gray-800">{{ $blog->title }}</h1>
        <img src="{{ asset('storage/' . $blog->images) }}" alt="{{ $blog->title }}" class="w-full mb-6 rounded-lg">
        <div class="text-gray-700">{!! $blog->description !!}</div>
    </main>

    @include('partials.footer')
</body>
</html>

