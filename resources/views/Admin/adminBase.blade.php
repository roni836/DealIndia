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
    <body class="min-h-screen flex bg-gray-100">

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-0 transform -translate-x-full lg:translate-x-0 lg:static lg:inset-auto w-64 bg-white shadow-md transition-transform duration-300 z-30">
            <div class="p-4 flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">Deal India</h1>
                <button id="closeSidebar" class="lg:hidden text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="mt-10 text-md  space-y-2">
                <a href="" class="block py-2 px-4  text-gray-700 hover:bg-gray-200">
                    <i class="bi bi-hdd-stack-fill px-2"></i> Dashboard
                </a>
                <a href="{{ url('/admin/application') }}" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">
                    <i class="bi bi-person-fill-add px-2"></i> Recent Applications
                </a>
                <a href="{{ url('/admin/application-approved') }}" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">
                    <i class="bi bi-person-fill-check px-2"></i> Approved Applications
                </a>
                <a href="{{route('logos.create')}}" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">
                    <i class="bi bi-brilliance px-2"></i> Logo Insert
                </a>
                <a href="{{route('logos.index')}}" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">
                    <i class="bi bi-exposure px-2"></i>  Manage Logo
                </a>
            </nav>
        </aside>
    
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-teal-400 shadow-md p-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <button id="menuButton" class="lg:hidden text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold">Admin Dashboard</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <p class="text-md font-mono">Welcome Admin</p>
                    @auth
                    <form id="logout-form" method="POST" action="{{ route('admin.logout') }}" class="inline-block">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Logout</button>
                    </form>
                    @endauth
                </div>
            </header>
    
            <!-- Dashboard Content -->
            <div class=" mt-8 p-4">
                @yield('content')
                @show
            </div>
        </div>
    
        <script>
            document.getElementById('menuButton').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('-translate-x-full');
            });
    
            document.getElementById('closeSidebar').addEventListener('click', function() {
                document.getElementById('sidebar').classList.add('-translate-x-full');
            });
        </script>
    
    </body>
    
    


</html>