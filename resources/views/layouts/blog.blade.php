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
    @include('partials.navbar2')

    <div class="flex-grow">
        <div class="px-6 py-12 mt-12 text-center">
            <h1 class="mb-6 text-5xl font-bold font-display">THE BLOG</h1>
            <p class="max-w-lg mx-auto"></p>
        </div>

        <!-- Blog Posts Section -->
        <div class="container grid grid-cols-1 gap-12 px-6 pt-12 pb-24 mx-auto lg:grid-cols-2">
            {{-- @foreach ($blogs as $post)
                <div>
                    <!-- Image -->
                    <a href="{{ url('/blog', $post->slug) }}">
                        <img src="{{ asset('storage/' . $post->image) }}" class="object-cover w-full h-52 md:h-64 lg:h-96 xl:h-64" alt="{{ $post->title }}" />
                    </a>

                    <!-- Blog Content -->
                    <div class="p-8 bg-gray-50">
                        <!-- Date -->
                        <div class="text-xs font-semibold text-gray-600 uppercase">{{ $post->created_at->format('M d, Y') }}</div>

                        <!-- Title -->
                        <h2 class="max-w-sm mt-3 mb-6 text-3xl leading-tight text-black font-display">
                            {{ $post->title ?? 'Untitled' }}
                        </h2>

                        <!-- Description -->
                        @if ($post->description)
                            <p class="max-w-md mt-4">{{ $post->description }}</p>
                        @endif

                        <!-- Read More Link -->
                        <a href="{{ url('/blog', $post->slug) }}" class="flex items-center mt-6 text-sm font-semibold text-black uppercase">
                            Read article
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            @endforeach --}}
        </div>

    </div>

    <!-- Include the Footer -->
    @include('partials.footer')
</body>
</html>

