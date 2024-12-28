@extends('user.userBase')
@section('title', 'Responsive Dashboard')
@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 z-30 w-64 bg-gray-300 text-black h-full transform -translate-x-full lg:translate-x-0 lg:relative transition-transform">
        <div class="flex items-center justify-between px-4 py-4 border-b">
            <h2 class="text-2xl font-bold">Dashboard</h2>
            <!-- Cancel Button -->
            <button id="cancelButton" class="text-gray-700 focus:outline-none lg:hidden">
                <i class="bi bi-x-lg text-xl"></i>
            </button>
        </div>
        <nav class="flex-1 text-lg">
            <ul>
                <li>
                    <a href="#profile" class="block px-4 py-2 hover:bg-gray-400"><i class="bi bi-person-bounding-box px-4"></i>Profile</a>
                </li>
                <li>
                    <a href="#settings" class="block px-4 py-2 hover:bg-gray-400"><i class="bi bi-gear-fill px-4"></i>Settings</a>
                </li>
                <li>
                    <a href="#tasks" class="block px-4 py-2 hover:bg-gray-400"><i class="bi bi-list-task px-4"></i>Tasks</a>
                </li>
                <li>
                    <a href="#notifications" class="block px-4 py-2 hover:bg-gray-400"><i class="bi bi-bell-fill px-4"></i>Notifications</a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col  ">
        <!-- Navbar -->
        <header class="bg-white shadow-sm p-5 flex items-center justify-between">
            <!-- Menu Button -->
            <button id="menuButton" class="lg:hidden text-gray-700 focus:outline-none">
                <i class="bi bi-list text-2xl"></i>
            </button>
            <h1 class="text-xl font-semibold text-gray-700">Welcome, {{ auth()->user()->name }}</h1>
            <a href="#notifications" class="text-blue-600 hover:underline"><i class="bi bi-bell-fill"></i></a>
        </header>

        <!-- Content -->
        <main class="flex-1 p-6">
            <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                <!-- Profile Section -->
                <section id="profile" class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Profile</h2>
                    <div class="text-md space-y-2">
                        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                        <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
                    </div>
                </section>
    
                <!-- Tasks Section -->
                <section id="tasks" class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Tasks</h2>
                    <ul class="space-y-2">
                        <li class="flex justify-between items-center">
                            <span>Complete the project report</span>
                            <button class="text-sm bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">
                                Mark as Done
                            </button>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>Update profile details</span>
                            <button class="text-sm bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">
                                Mark as Done
                            </button>
                        </li>
                    </ul>
                </section>
    
                
               
            </div>
    

            <!-- Section: Settings -->
            <section id="settings" class="bg-white shadow-md rounded-lg p-6 sm:mt-4">
                <h2 class="text-2xl font-bold  text-blue-800">Settings</h2>
                <p>Customize your settings here...</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">
                    Save Changes
                </button>
            </section>
        </main>
    </div>
</div>

<script>
    // Sidebar toggle for small and medium screens
    const menuButton = document.getElementById('menuButton');
    const cancelButton = document.getElementById('cancelButton');
    const sidebar = document.getElementById('sidebar');

    menuButton.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
    });

    cancelButton.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
    });
</script>
@endsection
