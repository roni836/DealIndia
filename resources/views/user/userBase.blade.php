<!doctype html>
<html lang="en">

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
    @livewireStyles


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
    

<nav class="border-gray-200 bg-gray-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="{{ route('homepage') }}" class=" w-[30%] lg:w-[10%] flex items-center space-x-3 rtl:space-x-reverse">
        <img src="logo.png" class="w-full" alt="">
      </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-solid-bg" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent ">
          <li>
            <a href="{{ route('homepage') }}" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">Contact</a>
          </li>

          @guest
          <li>
            <a href="{{ route('login') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">Login</a>
          </li>
          <li>
            <a href="{{ url('register') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">SignUp</a>
          </li>
          @endguest
          @auth 
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 ">
                Logout
            </button>
        </form>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  

    <div class="min-h-screen  flex flex-1 bg-gray-100">
        <div class="flex-1 flex flex-col ">


            <!-- Dashboard Content -->

            <div class="">
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

</body>

</html>