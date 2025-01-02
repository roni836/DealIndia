@extends('Admin.adminBase')
@section('title', 'Contact')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Contact</a>
    @if (session('success'))
        <p class="mt-4 text-green-600">{{ session('success') }}</p>
    @endif

    <div class="mt-6">
        <table class="table-auto w-full border border-gray-200 shadow-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Subject</th>
                    <th class="border px-4 py-2">Phone</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border px-4 py-2">{{ $contact->name }}</td>
                        <td class="border px-4 py-2">{{ $contact->email }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($contact->subject) }}</td>
                        <td class="border px-4 py-2">{{ $contact->phone_number }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('contacts.show', $contact->id) }}" 
                               class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 mr-2">View</a>
                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection


