
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full text-white ">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
          <!-- Logo Section -->
          <div class="flex items-center">
            <a class="text-2xl font-bold text-black no-underline toggleColour hover:no-underline lg:text-4xl" href="#">
              {{-- <img src="{{ asset('image/logoputih.svg') }}" alt="Logo Putih" width="65" height="64"> --}}
            </a>
            <a class="text-2xl font-bold text-black no-underline toggleColour hover:no-underline lg:text-4xl" href="#">
                FarmBro
            </a>
          </div>

          <!-- Mobile Menu Toggle -->
          <div class="block pr-4 lg:hidden">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>

          <!-- Navbar Content -->
          <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
            <ul class="items-center justify-center flex-1 list-reset lg:flex">
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold text-black no-underline transition duration-300 font-poetsen-one hover:text-gray-500" href="{{ route('index') }}">Beranda</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-xl font-bold text-black no-underline transition duration-300 font-poetsen-one hover:text-gray-500" href="{{ route('contact') }}">Tentang</a>
                 </li>
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold text-black no-underline transition duration-300 font-poetsen-one hover:text-gray-500" href="{{ route('layanan') }}">Layanan</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold text-black no-underline transition duration-300 font-poetsen-one hover:text-gray-500" href="#">Blog</a>
                </li>
              </ul>

            <!-- Login Button -->
            <button id="navAction" class="mx-auto lg:mx-0 lg:ml-auto hover:underline bg-[#FF7D53] text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Login
            </button>
          </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
      </nav>



  <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");
      var navItems = document.querySelectorAll("nav-content a");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navAction.classList.remove("bg-black");
          navAction.style.backgroundColor = "#FF7D53";
          navAction.classList.remove("text-gray-800");
          navAction.classList.add("text-white");
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          for (var k = 0; k < navItems.length; k++){
            navItems[k].classList.add("text-gray-800");
            navItems[k].classList.remove("text-white");
          }

          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

        //   for (var k = 0; k < navItems.length; k++) {
        //     navItems[k].classList.add("text-white");
        //     navItems[k].classList.remove("text-gray-800");
        //   }


          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });

  </script>

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
  </body>
