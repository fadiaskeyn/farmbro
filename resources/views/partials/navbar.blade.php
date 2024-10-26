
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <nav id="header" class="fixed top-0 z-30 w-full text-white bg-yellow-800 ">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
          <div class="flex items-center">
            <a class="text-2xl font-bold no-underline text-White toggleColour hover:no-underline lg:text-4xl" href="#">
                FarmBro
            </a>
          </div>

          <div class="block pr-4 lg:hidden">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>

          <div class="z-20 flex-grow hidden w-full p-4 mt-2 bg-yellow-800 text-White lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
            <ul class="items-center justify-center flex-1 list-reset lg:flex">
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold no-underline transition duration-300 text-White font-poetsen-one hover:text-gray-300" href="{{route('index')}}">Beranda</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold no-underline transition duration-300 text-White font-poetsen-one hover:text-gray-300" href="{{ route('contact') }}">Tentang</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold no-underline transition duration-300 text-White font-poetsen-one hover:text-gray-300" href="{{ route('layanan') }}">Layanan</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block px-4 py-2 text-xl font-bold no-underline transition duration-300 text-White font-poetsen-one hover:text-gray-300" href="#">Blog</a>
                </li>
              </ul>

            <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-black transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 lg:ml-auto hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                Login
            </button>
          </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
      </nav>



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
