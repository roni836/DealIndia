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

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Recent Applications</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left table-auto">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-2">Name</th>
                            {{-- <th class="px-4 py-2">Gender</th> --}}
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Mobile</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recent_applications as $item)
                            <tr class="border-b">
                                <td class="px-4 py-2 capitalize">{{ $item->first_name }} {{ $item->last_name }}</td>
                                {{-- <td class="px-4 py-2 capitalize">{{ $item->gender }}</td> --}}
                                <td class="px-4 py-2">{{ $item->email }}</td>
                                <td class="px-4 py-2">{{ $item->mobile }}</td>
                                <td class="px-4 py-2">
                                    <span class="{{ $item->status == 1 ? 'text-green-500' : 'text-red-500' }}">
                                        {{ $item->status == 1 ? 'Approved' : 'Pending' }}
                                    </span>
                                </td>
                                {{-- <td class="px-4 py-2">
                            <span class="bg-green-100 text-green-800 text-sm px-2 py-1 rounded">Shortlisted</span>
                        </td> --}}
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="{{ url('/admin/application/' . $item->id) }}"
                                        class="text-blue-600 hover:underline">
                                        <button
                                            class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-800">View</button>
                                    </a>
                                    <button
                                        class="px-2 py-1 bg-orange-500 text-white rounded hover:bg-orange-600">Reject</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>
@endsection
