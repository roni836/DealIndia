
@extends('Admin.adminBase')
@section('title', 'Applications')
@section('content')

<div class="container mx-auto  px-4">
    
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Card Header -->
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">User Information</h4>
        </div>

        <!-- User Info -->
        <div class="px-6 py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                </div>
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">Role:</span> {{ $user->role }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">Status:</span>
                        <span class="{{ $user->status ? 'text-green-500' : 'text-red-500' }}">
                            {{ $user->status ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                </div>
            </div>
            <div class="mt-6 flex flex-col md:flex-row justify-end space-y-2 md:space-y-0 md:space-x-2">
                <a href="#" class="bg-blue-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-blue-600 text-sm md:text-base text-center">
                    Update User
                </a>
                @if ($user->vr_code && $user->company_code && $user->noc_number)
                @else
                    <form action="{{ url('/admin/application/generate/' . $user->id) }}" method="POST" class="inline-block w-full md:w-auto">
                        @csrf 
                        <button type="submit"
                            class="bg-green-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-green-600 font-semibold focus:outline-none focus:ring-2 focus:ring-green-500 text-sm md:text-base text-center">
                            Approve Now
                        </button>
                    </form>
                @endif
                <a href="{{ url('/admin/application') }}"
                    class="bg-gray-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-gray-600 text-sm md:text-base text-center">
                    Back to List
                </a>
            </div>
        </div>

        <!-- Additional User Info -->
        <div class="border-t px-6 py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">V.R Code:</span> {{ $user->vr_code }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">Range Code:</span> {{ $user->range_code }}</p>
                </div>
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">Company Code:</span> {{ $user->company_code }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">NOC no.:</span> {{ $user->noc_number }}</p>
                </div>
            </div>
            <div class="mt-6 text-right">
                <a href="{{ url('/admin/application') }}" class="bg-gray-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-gray-600 text-sm md:text-base text-center">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>

@endsection


