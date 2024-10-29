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
            <h1 class="py-6 mt-6 mb-6 text-5xl font-bold font-display" style="font-family: 'Oswald', sans-serif;">Layanan Kami</h1>
        </div>

        <section class="px-8 py-6 border-b fade-in">
            <div class="container m-8 mx-auto">
              <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
              </div>
              <div class="flex flex-wrap justify-between place-items-start">

                <div class="w-full p-6 sm:w-1/2">
                  <img id="zoomImage" src="{{ asset('image/kandang4.jpg') }}" alt="foto" class="object-cover w-full rounded-lg h-80">
                </div>

                <div class="w-full p-6 sm:w-1/2">
                    <p class="flex items-center text-2xl font-bold text-black uppercase md:mb-6" style="font-family: 'Kanit', sans-serif;">
                        <img src="{{ asset('image/huhu.svg') }}" alt="Ayam Icon" class="w-12 h-12 mr-5">
                        Produksi pakam ternak yang unggul
                      </p>
                      <ul class="mb-6 list-reset">
                        <li class="flex items-center mt-2 mb-4">
                          {{-- <i class="mr-6 text-black fas fa-map-marker-alt fa-lg"></i> --}}
                          <a class="text-xl text-black no-underline hover:underline " style="font-family: 'Kanit', sans-serif;">
                            Kami memproduksi pakan ternak  dengan formulasi yang optimal untuk kesehatan dan produktivitas ternak Anda. Produk kami terbuat dari bahan-bahan berkualitas tinggi dan sudah teruji.
                          </a>
                        </li>
                      </ul>
                </div>
              </div>
            </div>
          </section>

          <section class="px-8 py-6 border-b fade-in">
            <div class="container m-8 mx-auto">
              <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
              </div>
              <div class="flex flex-wrap justify-between place-items-start">

                <div class="w-full p-6 sm:w-1/2">
                    <p class="flex items-center text-2xl font-bold text-black uppercase md:mb-6" style="font-family: 'Kanit', sans-serif;">
                        <img src="{{ asset('image/handshake1.svg') }}" alt="Ayam Icon" class="w-12 h-12 mr-5">
                        Kemitraan Peternakan Ayam Broiler
                      </p>
                      <ul class="mb-6 list-reset">
                        <li class="flex items-center mt-2 mb-4">
                          <a class="text-xl text-black no-underline hover:underline " style="font-family: 'Kanit', sans-serif;">
                            Bersama FarmBro, raih peluang kemitraan dengan sistem yang transparan dan menguntungkan. Kami menyediakan bimbingan dan dukungan penuh untuk memastikan kesuksesan usaha Anda
                          </a>
                        </li>

                      </ul>
                </div>
                <div class="w-full p-6 sm:w-1/2">
                    <img id="zoomImage" src="{{ asset('image/image2.jpg') }}" alt="foto" class="object-cover w-full rounded-lg h-80">
                  </div>
              </div>
            </div>
          </section>

          <section class="px-8 py-6 border-b fade-in">
            <div class="container m-8 mx-auto">
              <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
              </div>
              <div class="flex flex-wrap justify-between place-items-start">
                <div class="w-full p-6 sm:w-1/2">
                  <img id="zoomImage" src="{{ asset('image/ayam4.jpg') }}" alt="foto" class="object-cover w-full rounded-lg h-80">
                </div>

                <div class="w-full p-6 sm:w-1/2">
                  <p class="flex items-center text-2xl font-bold text-black uppercase md:mb-6" style="font-family: 'Kanit', sans-serif;">
                    <img src="{{ asset('image/hen.svg') }}" alt="Ayam Icon" class="w-12 h-12 mr-5">
                    Ayam Broiler
                  </p>
                  <ul class="mb-6 list-reset">
                    <li class="flex items-center mt-2 mb-4">
                      <a class="text-xl text-black no-underline hover:underline " style="font-family: 'Kanit', sans-serif;">
                        Kami menyediakan Ayam unggul untuk mendukung program pengembangbiakan Ayam Anda. Kualitas ternak kami terjamin, sehat, dan produktif.
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

    </div>

    @include('partials.footer')

</body>

<style>

    .fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }

      const elements = document.querySelectorAll('.fade-in');
      function handleScroll() {
        elements.forEach(element => {
          if (isInViewport(element)) {
            element.classList.add("show");
          }
        });
      }
      window.addEventListener("scroll", handleScroll);
      handleScroll();
    });
  </script>
