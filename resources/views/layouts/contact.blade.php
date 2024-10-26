<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FarmBro')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="flex flex-col h-screen ">
    @include('partials.navbar')
    <div class="flex-grow ">
        <div class="px-6 py-12 mt-5 text-center">
            <h1 class="py-6 mt-6 mb-6 text-5xl font-bold font-display" style="font-family: 'Oswald', sans-serif;">Contact</h1>
        </div>
        <section class="px-8 py-6 border-b">
            <div class="container m-8 mx-auto">
              <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
              </div>
              <div class="flex flex-wrap justify-between place-items-start">

                <div class="w-full p-6 sm:w-1/2">
                  <img id="zoomImage" src="{{ asset('image/kandang4.jpg') }}" alt="foto" class="object-cover w-full rounded-lg h-80">
                </div>

                <div class="w-full p-6 sm:w-1/2">
                    <p class="text-2xl font-bold text-black uppercase md:mb-6" style="font-family: 'Kanit', sans-serif;">Informasi kontak</p>
                    <ul class="mb-6 list-reset">
                        <li class="flex items-center mt-2 mb-4">
                            <i class="mr-6 text-black fas fa-map-marker-alt fa-lg"></i>
                            <a href="#" class="text-xl no-underline text-xlack hover:underline hover:text-blue-500" style="font-family: 'Kanit', sans-serif;">
                                Jalan Sultan Agung No. 42, Dusun Krajan, Desa Purwosari, Kec. Gumukmas, Kab. Jember, Jawa Timur, 68165
                            </a>
                        </li>
                        <li class="flex items-center mt-2 mb-4">
                            <i class="mr-4 text-black fas fa-phone-alt fa-lg"></i>
                            <a href="tel:0812331151544" class="text-xl text-black no-underline hover:underline hover:text-blue-500"  style="font-family: 'Kanit', sans-serif;">0812331151544</a>
                        </li>
                        <li class="flex items-center mt-2 mb-4">
                            <i class="mr-4 text-black fas fa-envelope fa-lg"></i>
                            <a href="mailto:Fadiaskyen@gmai.com" class="text-xl text-black no-underline hover:underline hover:text-blue-500" style="font-family: 'Kanit', sans-serif;">Fadiaskyen@gmail.com</a>
                        </li>
                    </ul>
                </div>
              </div>
            </div>
          </section>
    </div>

    @include('partials.footer')

</body>

