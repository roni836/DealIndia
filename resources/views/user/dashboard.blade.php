@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')
<div class="flex mt-10 bg-gray-100">
    <!-- Sidebar -->
  @include('user.include.sidebar')
    <!-- Main Content -->
    <div class="flex-1 flex flex-col  ">
        <!-- Navbar -->
        <header class="bg-white shadow-sm p-5 flex items-center justify-between">
            <!-- Menu Button -->
           
            <h1 class="text-xl font-semibold text-gray-700">Welcome, {{ auth()->user()->name }}</h1>
         
            <button id="menuButton" class="lg:hidden text-gray-700 focus:outline-none">
                <i class="bi bi-list text-2xl"></i>
            </button>
        </header>

        <!-- Content -->
        <main class="flex-1 p-6 md:p-12 space-y-4">
            <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                <!-- Profile Section -->
                <section id="profile" class="bg-white shadow-md rounded-lg p-4 md:p-6 h-48">
                    <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Profile</h2>
                    <div class="text-sm md:text-md space-y-2">
                        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                        <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
                    </div>
                </section>
                <section id="profile" class="bg-white shadow-md rounded-lg p-4 md:p-6 h-48">
                    <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Profile</h2>
                    <div class="text-sm md:text-md space-y-2">
                        <p><strong>V.R Code:</strong> {{ auth()->user()->vr_code }}</p>
                        <p><strong>Range Code:</strong> {{ auth()->user()->range_code }}</p>
                        <p><strong>Company Code:</strong> {{ auth()->user()->company_code }}</p>
                        <p><strong>NOC no.:</strong> {{ auth()->user()->noc_number }}</p>
                    </div>
                </section>
            </div>

                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                <!-- Tasks Section -->
                <section id="tasks" class="bg-white shadow-md rounded-lg p-6 h-48">
                    <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Tasks</h2>
                    <ul class="space-y-2 text-sm md:text-sm ">
                        <li class="flex justify-between items-center">
                            <span>Complete the project report</span>
                            <button class="text-sm bg-blue-800 text-white px-2  md:px-3 py-1 md:py-2 rounded hover:bg-blue-700">
                                Mark as Done
                            </button>
                        </li>
                        <li class="flex justify-between items-center ">
                            <span>Update your profile details</span>
                            <button class="text-sm bg-blue-800 text-white px-2 md:px-3 py-1 md:py-2 rounded hover:bg-blue-700">
                                Mark as Done
                            </button>
                        </li>
                    </ul>
                </section>
                <section id="settings" class="bg-white shadow-md rounded-lg p-6  h-48">
                    <h2 class="text-2xl font-bold  text-blue-800">Settings</h2>
                    <p>Customize your settings here...</p>
                    <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">
                        Save Changes
                    </button>
                </section>
                
               
            </div>
    

            <!-- Section: Settings -->
            
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
