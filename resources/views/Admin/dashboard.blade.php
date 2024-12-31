@extends('Admin.adminBase')
@section('title', 'Dashboard')
@section('content')
    <main class="p-6">
        <!-- Stats Section -->
        <div class="grid  grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-gray-600">Pending Applications</h3>
                <p class="text-2xl font-bold">{{$total_pending}}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-gray-600">Approved Applications</h3>
                <p class="text-2xl font-bold">{{$total_approved}}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-gray-600">Active Applications</h3>
                <p class="text-2xl font-bold">{{$total_active}}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-gray-600">Total Applications</h3>
                <p class="text-2xl font-bold">{{$total_application}}</p>
            </div>
        </div>

        <!-- Financial Analytics -->
       

        <!-- Recent Activities & Investor Management -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Recent Activities</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Action</th>
                                <th class="text-left py-2">Time</th>
                                <th class="text-left py-2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-2">New Investor Added</td>
                                <td class="py-2">10:00 AM</td>
                                <td class="py-2">Rajesh Kumar - ₹1,00,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Investors</h2>
                <div class="mb-4">
                    <input type="text" placeholder="Search investors..." class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Name</th>
                                <th class="text-left py-2">Investment</th>
                                <th class="text-left py-2">Status</th>
                                {{-- <th class="text-left py-2">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-2">Rajesh Kumar</td>
                                <td class="py-2">₹1,00,000</td>
                                <td class="py-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Active</span></td>
                                {{-- <td class="py-2">
                                    <button class="text-blue-600 hover:text-blue-800 mr-2">Edit</button>
                                    <button class="text-red-600 hover:text-red-800">Delete</button>
                                </td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Notifications & Quick Links -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Notifications</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                        <i class="fas fa-bell text-yellow-600 mr-3"></i>
                        <p class="text-yellow-800">Investment request pending approval</p>
                    </div>
                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                        <i class="fas fa-check-circle text-green-600 mr-3"></i>
                        <p class="text-green-800">New investor registration completed</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Quick Links</h2>
                <div class="grid grid-cols-2 gap-4">
                    <button class="bg-gray-100 hover:bg-gray-200 p-4 rounded-lg text-center">
                        <i class="fas fa-users mb-2"></i>
                        <p>View All Investors</p>
                    </button>
                    <button class="bg-gray-100 hover:bg-gray-200 p-4 rounded-lg text-center">
                        <i class="fas fa-plus-circle mb-2"></i>
                        <p>Add New Project</p>
                    </button>
                    <button class="bg-gray-100 hover:bg-gray-200 p-4 rounded-lg text-center">
                        <i class="fas fa-file-alt mb-2"></i>
                        <p>Generate Reports</p>
                    </button>
                    <button class="bg-gray-100 hover:bg-gray-200 p-4 rounded-lg text-center">
                        <i class="fas fa-cog mb-2"></i>
                        <p>Settings</p>
                    </button>
                </div>
            </div>
        </div>

    </main>
@endsection
