@extends('Admin.adminBase')

@section('title', 'Rejected Applications')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Rejected Applications</h2>


    @if($rejectedApplications->count() > 0)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
        <table class="w-full text-left table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4  text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Name</th>
                    <th class="py-2 px-4  text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Email</th>
                    <th class="py-2 px-4  text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Rejected At</th>
                    <th class="py-2 px-4  text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rejectedApplications as  $application)
                <tr class="border-b">
                    <td class="py-2 px-4 text-sm">{{ $application->first_name }} {{ $application->last_name }}</td>
                    <td class="py-2 px-4 text-sm">{{ $application->email }}</td>
                    <td class="py-2 px-4 text-sm">{{ $application->updated_at->format('Y-m-d H:i') }}</td>
                    <td class="py-2 px-4 text-sm">
                        <a href="{{ url('/admin/application/' . $application->id) }}"
                           class="text-blue-500 hover:underline">
                           <button class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-800">View</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p class="text-gray-600">No rejected applications found.</p>
    @endif

    
</div>
@endsection
