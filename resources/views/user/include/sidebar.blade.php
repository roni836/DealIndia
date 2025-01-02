<aside id="sidebar"
    class="fixed top-0 left-0 z-30 w-64 bg-gray-300 text-black h-screen transform -translate-x-full lg:translate-x-0 lg:relative transition-transform">
    <div class="flex items-center justify-between px-4 py-4 border-b">
        <h2 class="text-2xl font-bold"><a href="{{ route('dashboard') }}">Dashboard</a></h2>
        <!-- Cancel Button -->
        <button id="cancelButton" class="text-gray-700 focus:outline-none lg:hidden">
            <i class="bi bi-x-lg text-xl"></i>
        </button>
    </div>
    <nav class="flex-1 text-lg">
        <ul>
            <li>

                {{-- @if ($logo) --}}
                    <a href="{{ route('details', auth()->id()) }}" class="block px-4 py-2 hover:bg-gray-400">
                        <i class="bi bi-person-bounding-box px-4"></i>Profile
                    </a>
                {{-- @else
                    <a href="" class="block px-4 py-2 hover:bg-gray-400">
                        <i class="bi bi-person-bounding-box px-4"></i>Profile
                    </a>
                @endif --}}

            </li>
            <li>
                <a href="{{route('member-details')}}" class="block px-4 py-2 hover:bg-gray-400">
                    <i class="bi bi-people-fill px-4"></i>Dealindia Team</a>
            </li>
            <li>
                <a href="#settings" class="block px-4 py-2 hover:bg-gray-400"><i
                        class="bi bi-gear-fill px-4"></i>Settings</a>
            </li>
            <li>
                <a href="#tasks" class="block px-4 py-2 hover:bg-gray-400"><i
                        class="bi bi-list-task px-4"></i>Tasks</a>
            </li>
            <li>
                <a href="#notifications" class="block px-4 py-2 hover:bg-gray-400"><i
                        class="bi bi-bell-fill px-4"></i>Notifications</a>
            </li>
        </ul>
    </nav>
</aside>
