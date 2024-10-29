

<div class="pt-24 bg-center bg-cover" style="background-image: url('{{ asset('image/baground.svg') }}'); height: 250vh;">
    <div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
      <!--Left Col-->
      <div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left">
        <h1 class="my-4 text-5xl font-bold leading-tight text-white">
          Selamat datang di FarmBro
        </h1>
        <p class="mb-8 text-2xl leading-normal text-white">
            Kemitraan Peternakan Ayam terbaik di Jember, Jawa Timur, Indonesia
        </p>
        <button class="px-8 py-4 mx-auto my-6 font-bold text-white text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
          Mulai Sekarang
        </button>
      </div>
      <div class="w-full py-6 text-center md:w-3/5">
      </div>
    </div>

    <!-- SVG Divider -->
    <div class="relative -mt-12 lg:-mt-0.5">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
</div>



<section class="px-8 py-8 bg-white border-b fade-in">
    <div class="container m-8 mx-auto">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Tentang Kami
      </h1>
      <div class="w-full mb-4">
        <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
      </div>
      <div class="flex flex-wrap justify-between place-items-start">

        <div class="w-full p-6 sm:w-1/2">
          <img id="zoomImage" src="{{ asset('image/hi.jpg') }}" alt="foto" class="object-cover w-full rounded-lg h-80">
        </div>

        <div class="w-full p-6 sm:w-1/2">
          <p class="mb-8 text-2xl text-black" style="font-family: 'Kanit', sans-serif;">
            FARMBRO adalah perusahaan yang berkomitmen untuk meningkatkan kualitas dan produktivitas peternakan di Indonesia. Kami fokus pada kemitraan ayam broiler serta penyediaan pakan ternak unggas berkualitas tinggi. Berlokasi di Jember, Jawa Timur, kami siap mendukung peternak lokal dengan layanan terbaik dan terpercaya.
            <br />
          </p>
          <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg rounded-10 lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105"
          style="background-color: #FF7D53; ">
            Mulai Sekarnag
          </button>
        </div>
      </div>
    </div>
  </section>




  <section class="py-8 bg-yellow-800 border-b fade-in">
    <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
        <h1 class="w-full my-2 text-2xl font-bold leading-tight text-center text-white animate-on-scroll">
          Layanan Farmbro
        </h1>
        <div class="w-full mb-4 animate-on-scroll">
          <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-100 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 animate-on-scroll">
            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="flex justify-center w-full my-4">
                    <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                    <img src="{{ asset('image/handshake1.svg') }}" alt="Kemitraan Icon" class="w-16 h-16 ">
                    </div>
                </div>
                <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                    Kemitraan Peternakan Ayam
                </div>
                <p class="px-6 mb-5 text-lg text-gray-800">
                    Bersama FarmBro, raih peluang kemitraan dengan sistem yang transparan dan menguntungkan.
                </p>
                </a>
            </div>
            <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                <div class="flex items-center justify-center">
                    <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                        See more
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 animate-on-scroll">
            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="flex justify-center w-full my-4">
                    <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                    <img src="{{ asset('image/hen.svg') }}" alt="Ayam Icon" class="w-16 h-16 ">
                    </div>
                </div>
                <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                    Ayam Broiler
                </div>
                <p class="px-6 mb-5 text-lg text-gray-800">
                    Kami menyediakan Ayam unggul untuk mendukung program pengembangbiakan Ayam Anda.
                </p>
                </a>
            </div>
            <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                <div class="flex items-center justify-center">
                    <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                        See more
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 animate-on-scroll">
            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="flex justify-center w-full my-4">
                    <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                    <img src="{{ asset('image/huhu.svg') }}" alt="Pakan Ternak Icon" class="w-16 h-16 ">
                    </div>
                </div>
                <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                    Produksi Pakan Ternak
                </div>
                <p class="px-6 mb-5 text-lg text-gray-800">
                    Kami menyediakan pakan ternak berkualitas untuk meningkatkan produktivitas ternak Anda.
                </p>
                </a>
            </div>
            <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                <div class="flex items-center justify-center">
                    <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                        See more
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-8 border-b fade-in">
        <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
            <h1 class="w-full my-2 text-2xl font-bold leading-tight text-center text-black">
                Read Post
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-100 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 fade-in">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                    <img id="image1" src="{{ asset('image/image1.jpg') }}" alt="Image 1" class="object-cover w-full rounded-lg h-80">
                </div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 fade-in">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                    <img id="image2" src="{{ asset('image/image2.jpg') }}" alt="Image 2" class="object-cover w-full rounded-lg h-80">
                </div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3 fade-in">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                    <img id="image3" src="{{ asset('image/image3.jpg') }}" alt="Image 3" class="object-cover w-full rounded-lg h-80">
                </div>
            </div>
        </div>
    </section>



    <section class="py-8 border-b fade-in">
      <div class="container flex flex-wrap justify-center pt-4 pb-12 mx-auto">
        <h1 class="w-full my-2 text-2xl font-bold leading-tight text-center text-black">
          Apa kata mereka tentang Farmbro ?
        </h1>
        <div class="w-full mb-4">
          <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-100 gradient"></div>
        </div>

        <!-- Comment 1 -->
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
          <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                Testimoni Pertama
              </div>
              <p class="px-6 mb-5 text-lg text-gray-800" style="font-family: 'Kanit', sans-serif;">
                FarmBro telah menjadi mitra yang luar biasa bagi usaha peternakan ayam broiler saya. Awalnya, saya ragu untuk memulai kemitraan, namun setelah melihat kualitas dan transparansi yang mereka tawarkan, saya memutuskan untuk bergabung. Dukungan yang mereka berikan tidak hanya sebatas penyediaan ayam broiler unggul, tetapi juga bimbingan dalam manajemen peternakan. Dengan bantuan ini, produktivitas ayam broiler saya meningkat pesat. Saya merasa sangat terbantu dan optimis untuk mengembangkan usaha peternakan ini lebih jauh lagi.
              </p>
            </a>

            <div class="flex items-center justify-start w-full p-6 my-4">
                <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                  <img src="{{ asset('image/maskgroup.svg') }}" alt="Icon" class="w-16 h-16">
                </div>
                <div class="flex flex-col ml-4">
                  <div class="text-xl font-bold text-gray-800">
                    Juragan Pakem
                  </div>
                  <div class="text-base text-gray-600">
                    Padias nur ahmadi
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
              <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                  Testimoni Kedua
                </div>
                <p class="px-6 mb-5 text-lg text-gray-800" style="font-family: 'Kanit', sans-serif;">
                    Saya sangat puas dengan pakan ayam broiler dari FarmBro. Sebelum mengenal FarmBro, saya sering mengalami masalah dengan kualitas pakan yang tidak konsisten. Namun, sejak menggunakan pakan dari FarmBro, saya melihat perubahan signifikan pada kesehatan dan produktivitas ayam broiler saya. Selain itu, layanan pengiriman mereka selalu tepat waktu, sehingga saya tidak pernah kekurangan stok pakan. Tim FarmBro juga selalu siap memberikan saran mengenai formulasi pakan yang tepat untuk kebutuhan ayam broiler saya. Layanan pelanggan mereka sangat responsif.
                </p>
              </a>

              <div class="flex items-center justify-start w-full p-6 my-4">
                  <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                    <img src="{{ asset('image/mask3.svg') }}" alt="Icon" class="w-16 h-16">
                  </div>
                  <div class="flex flex-col ml-4">
                    <div class="text-xl font-bold text-gray-800">
                      Juragan Pakem
                    </div>
                    <div class="text-base text-gray-600">
                      Padias nur ahmadi
                    </div>
                  </div>
                </div>
            </div>
          </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
              <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="w-full p-4 px-6 text-2xl font-bold text-brown-800">
                  Testimoni Ketiga
                </div>
                <p class="px-6 mb-5 text-lg text-gray-800" style="font-family: 'Kanit', sans-serif;">
                    Kerjasama dengan FarmBro telah membawa banyak manfaat bagi bisnis saya. Sebelum bergabung, saya kesulitan menemukan ayam broiler unggul yang produktif dan sehat. FarmBro menyediakan ayam broiler pejantan dan indukan berkualitas tinggi yang sangat produktif. Mereka juga memberikan bimbingan teknis yang sangat membantu dalam meningkatkan manajemen peternakan saya. Pelayanan mereka sangat profesional dan ramah, membuat saya merasa dihargai sebagai mitra. FarmBro benar-benar menjadi mitra yang dapat diandalkan dalam usaha peternakan saya.
                </p>
              </a>

              <div class="flex items-center justify-start w-full p-6 my-4">
                  <div class="p-4 bg-gray-200 rounded-full shadow-lg">
                    <img src="{{ asset('image/mask2.svg') }}" alt="Icon" class="w-16 h-16">
                  </div>
                  <div class="flex flex-col ml-4">
                    <div class="text-xl font-bold text-gray-800">
                      Juragan Pakem
                    </div>
                    <div class="text-base text-gray-600">
                      Padias nur ahmadi
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105"
          style="background-color: #FF7D53;">
            Find Out More
          </button>

      </div>
    </section>


    <section class="container py-6 mx-auto mb-12 text-center fade-in">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-yellow-800">
            Siap memulai kemitraan yang menguntungkan ?
            </h1>
            <div class="w-full mb-4">
            <div class="w-1/6 h-1 py-0 mx-auto my-0 bg-white rounded-t opacity-25"></div>
            </div>
            <h3 class="my-4 text-3xl leading-tight" style="font-family: 'Kanit', sans-serif;">
            Hubungi Kami Sekarang
            </h3>
    </section>



    <script>
        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;
        function check(e) {
          var target = (e && e.target) || (event && event.srcElement);

          //Nav Menu
          if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
              // click on the link
              if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
              } else {
                navMenuDiv.classList.add("hidden");
              }
            } else {
              navMenuDiv.classList.add("hidden");
            }
          }
        }
        function checkParent(t, elm) {
          while (t.parentNode) {
            if (t == elm) {
              return true;
            }
            t = t.parentNode;
          }
          return false;
        }
      </script>

<style>
  #zoomImage {
    transition: transform 0.3s ease-in-out;
  }
</style>

<script>
  const zoomImage = document.getElementById('zoomImage');
  zoomImage.addEventListener('mouseenter', function () {
    zoomImage.style.transform = 'scale(1.1)';
  });
  zoomImage.addEventListener('mouseleave', function () {
    zoomImage.style.transform = 'scale(1)';
  });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .fade-in {
        opacity: 0;
        transition: opacity 3s ease-in-out, transform 3 s ease-in-out;
    }

    .fade-in.visible {
        animation: fadeIn 1s forwards;
    }

    .hover-effect:hover {
        filter: brightness(75%);
    }

    .animate-on-scroll {
    opacity: 0;
    transform: translateY(100px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  .animate-on-scroll.show {
    opacity: 1;
    transform: translateY(0);
  }

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
   document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('scroll', function() {
        let elements = document.querySelectorAll('.fade-in');
        elements.forEach((element) => {
            const position = element.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (position < screenHeight) {
                element.classList.add('visible');
            }
        });
    });
});

const images = document.querySelectorAll('img');
images.forEach((image) => {
    image.addEventListener('mouseover', () => {
        image.style.filter = 'brightness(60%)';
    });

    image.addEventListener('mouseout', () => {
        image.style.filter = 'brightness(100%)'; ar
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const animateElements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.2
    });

    animateElements.forEach(el => observer.observe(el));
  });

  document.addEventListener("DOMContentLoaded", function() {
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top < window.innerHeight &&
        rect.bottom >= 0
      );
    }
    const fadeElements = document.querySelectorAll('.fade-in');
    function handleScroll() {
      fadeElements.forEach(element => {
        if (isInViewport(element)) {
          element.classList.add("show");
        }
      });
    }
    window.addEventListener("scroll", handleScroll);
    handleScroll();
  });
</script>
