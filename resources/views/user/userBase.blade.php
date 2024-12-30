<!doctype html>
<html lang="en">
@livewireStyles
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- @vite('resources/css/app.css') --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>@yield('title') | Deal India</title>



  <style>
    .roboto-medium {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-style: normal;
    }

    body {
      font-family: "Roboto", sans-serif;
    }
  </style>
</head>

<body>

<header id="header" class="fixed w-full z-50 transition-all duration-300 bg-white">
  <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center space-x-2">
        <a href="{{ route('homepage') }}">
          <img src="{{ asset('storage/images/setting/' . $logo->meta_logo) }}" alt="Logo" class="h-10 md:11 w-auto object-contain rounded-md" onerror="this.src='https://via.placeholder.com/40?text=Logo';">
        </a>
      </div>
      <nav class="hidden md:flex items-center space-x-6">
        <a href="{{ route('homepage') }}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="home">Home</a>
        <a href="{{route('services')}}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="services">Services</a>
        <a href="{{route('about')}}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="about">About</a>
        <a href="{{route('contact')}}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="contact">Contact</a>
        <a href="{{route('privacy-policy')}}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="privacy">Privacy Policy</a>
        <a href="{{route('Terms-of-Service')}}" class="text-sm font-medium transition-colors duration-200 text-gray-600 hover:text-teal-600" id="terms">Terms of Service</a>
      </nav>
      <div class="hidden md:flex items-center space-x-4">
        @guest
        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-teal-600 border border-teal-600 rounded-md hover:bg-teal-50 transition-colors duration-200">Login</a>
        <a href="{{ url('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-md hover:bg-teal-700 transition-colors duration-200">SignUp</a>
        @endguest
        @auth
        <form method="POST" action="{{ route('logout') }}" class="inline">
          @csrf
          <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition-colors duration-200">Logout</button>
        </form>
        @endauth
      </div>
      <button class="md:hidden text-gray-600 hover:text-teal-600 transition-colors duration-200" onclick="toggleMenu()" aria-label="Toggle menu">
        <i id="menu-icon" class="fas fa-bars w-6 h-6"></i>
      </button>
    </div>
  </div>
  <div id="mobile-menu" class="md:hidden bg-white border-t hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="{{ route('homepage') }}" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-teal-600 hover:bg-teal-50" id="mobile-home">Home</a>
      <a href="#" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-teal-600 hover:bg-teal-50" id="mobile-services">Services</a>
      <a href="{{ route('contact') }}" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-teal-600 hover:bg-teal-50" id="mobile-contact">Contact</a>
      <a href="#" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-teal-600 hover:bg-teal-50" id="mobile-privacy">Privacy Policy</a>
      <a href="#" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-teal-600 hover:bg-teal-50" id="mobile-terms">Terms of Service</a>
      <div class="pt-4 space-y-2">
        @guest
        <a href="{{ route('login') }}" class="block w-full px-4 py-2 text-sm font-medium text-teal-600 border border-teal-600 rounded-md hover:bg-teal-50 transition-colors duration-200">Login</a>
        <a href="{{ url('register') }}" class="block w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-md hover:bg-teal-700 transition-colors duration-200">SignUp</a>
        @endguest
        @auth
        <form method="POST" action="{{ route('logout') }}" class="inline w-full">
          @csrf
          <button type="submit" class="block w-full px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition-colors duration-200">Logout</button>
        </form>
        @endauth
      </div>
    </div>
  </div>
</header>





  <div class="min-h-screen  flex flex-1 bg-gray-100">
    <div class="flex-1 flex flex-col ">


      <!-- Dashboard Content -->

      <div class="mt-10">
        @yield('content')
        @show
      </div>
      <div class="">
        @include('user.include.footer')
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  @livewireScripts

  <script>
    let isOpen = false;
    let activePage = 'home';

    function toggleMenu() {
      isOpen = !isOpen;
      document.getElementById('mobile-menu').classList.toggle('hidden', !isOpen);
      document.getElementById('menu-icon').classList.toggle('fa-bars', !isOpen);
      document.getElementById('menu-icon').classList.toggle('fa-times', isOpen);
    }

    function setActivePage(page) {
      activePage = page;
      document.querySelectorAll('nav button').forEach(button => {
        button.classList.toggle('text-teal-600', button.id === page);
        button.classList.toggle('border-b-2', button.id === page);
        button.classList.toggle('border-teal-600', button.id === page);
        button.classList.toggle('text-gray-600', button.id !== page);
      });
      document.querySelectorAll('#mobile-menu button').forEach(button => {
        button.classList.toggle('text-teal-600', button.id === `mobile-${page}`);
        button.classList.toggle('bg-teal-50', button.id === `mobile-${page}`);
        button.classList.toggle('text-gray-600', button.id !== `mobile-${page}`);
      });
      if (isOpen) toggleMenu();
    }

    window.addEventListener('scroll', () => {
      const header = document.getElementById('header');
      const isScrolled = window.scrollY > 0;
      header.classList.toggle('scrolled', isScrolled);
    });

    // Initialize active page
    setActivePage(activePage);
  </script>

</body>

</html>