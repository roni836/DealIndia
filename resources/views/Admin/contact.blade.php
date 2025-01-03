@extends('Admin.adminBase')
@section('title', 'View Contact Message')
@section('content')
    <div class="flex flex-1 flex-col">
        <div class="md:px-[2%] px-5 ">
            <div class="flex gap-3 flex-col md:flex-row justify-between md:items-center">

                <h2 class="text-xl font-semibold text-gray-800 ">Contact Message</h2>
               
            </div>
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg onclick="this.parentElement.parentElement.style.display='none'" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 01-1.497 1.316l-2.851-2.75-2.85 2.75a1 1 0 01-1.498-1.316l2.85-2.75-2.85-2.75a1 1 0 111.498-1.316l2.85 2.75 2.851-2.75a1 1 0 011.497 1.316l-2.85 2.75 2.85 2.75a1 1 0 010 1.316z"/></svg>
                </span>
            </div>
        @endif
        <div class="relative overflow-x-auto flex-1 border border-gray-300 mt-5 rounded-lg shadow-sm">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-800 uppercase bg-gray-100 border-b border-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Contact</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Subject</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="bg-white hover:bg-gray-50 border-b border-gray-300">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ $contact->id }}
                            </th>
                            <td class="px-6 py-4">{{ $contact->name }}</td>
                            <td class="px-6 py-4">{{ $contact->phone_number }}</td>
                            <td class="px-6 py-4">{{ $contact->email }}</td>
                            <td class="px-6 py-4">{{ ucfirst($contact->subject) }}</td>
                            <td class="px-6 py-4">
                                @if ($contact->status == 1)
                                    <span class="px-3 py-1 text-xs rounded-full font-medium text-white bg-blue-500">
                                        Approved
                                    </span>
                                @elseif ($contact->status == 2)
                                    <span class="px-3 py-1 text-xs rounded-full font-medium text-white bg-red-500">
                                        Close
                                    </span>
                                @else
                                    <span class="px-3 py-1 text-xs rounded-full font-medium text-white bg-orange-500">
                                        Pending
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.contact.show', $contact->id) }}" 
                                   class="px-4 py-2 text-xs rounded-lg font-medium text-white bg-teal-500 hover:bg-teal-600">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
            <div class="flex flex-1 space-x-2 justify-center mt-2 pagination">
                {{ $contacts->links() }}
            </div>

        </div>
    </div>
@endsection

