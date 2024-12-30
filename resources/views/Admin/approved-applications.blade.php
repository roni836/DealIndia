@extends('Admin.adminBase')
@section('title', 'Applications')
@section('content')
<main class="p-6">
    
    
        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Approved Applications</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left table-auto">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Gender</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Mobile</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $item)
                        <tr class="border-b">
                            <td class="px-4 py-2 capitalize">{{$item->name}}</td>
                            <td class="px-4 py-2 capitalize">{{$item->gender}}</td>
                            <td class="px-4 py-2">{{$item->email}}</td>
                            <td class="px-4 py-2">{{$item->mobile}}</td>
                            <td class="px-4 py-2">
                                <span class="{{ $item->status == 1 ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $item->status == 1 ? 'Approved' : 'Pending' }}
                                </span>
                            </td>
                            {{-- <td class="px-4 py-2">
                                <span class="bg-green-100 text-green-800 text-sm px-2 py-1 rounded">Shortlisted</span>
                            </td> --}}
                            <td class="px-4 py-2 flex space-x-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Reject</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
