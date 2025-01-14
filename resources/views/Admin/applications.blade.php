@extends('Admin.adminBase')
@section('title', 'Applications')
@section('content')
<main class="p-6">
    <!-- Table Section -->
    @if(session('message'))
    <div class="bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        {{ session('message') }}
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <div class="p-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold">Recent Applications</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
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
                    @foreach($applications as $item)
                    <tr>
                        <td class="px-4 py-2 capitalize ">{{$item->first_name}} {{$item->last_name}}</td>
                        {{-- <td class="px-4 py-2 capitalize">{{$item->gender}}</td> --}}
                        <td class="px-4 py-2">{{$item->email}}</td>
                        <td class="px-4 py-2">{{$item->mobile}}</td>
                        <td class="px-4 py-2 text-orange-500 font-semibold">
                            {{ $item->status == 1 ? 'Approved' : 'Pending' }}
                        </td>
                        <td class="px-4 py-2 flex space-x-2">
                            <a href="{{ url('/admin/application/' . $item->id) }}" class="text-blue-600 hover:underline">
                                <button class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-800">View</button>
                            </a>
                            {{-- <button class="px-2 py-1 bg-orange-500 text-white rounded hover:bg-orange-600">Reject</button> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

