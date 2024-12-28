@extends('Admin.adminBase')
@section('title', 'Applications')
@section('content')

    <div class="container mx-auto my-10">
        <h2 class="text-center text-2xl font-bold mb-6">User Details</h2>
        <div class="bg-white shadow-lg rounded-lg">
            <!-- Card Header -->
            <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                <h4 class="text-lg font-semibold">User Information</h4>
            </div>

            <!-- User Info -->
            <div class="px-6 py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                        <p><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                    </div>
                    <div>
                        <p><span class="font-semibold">Role:</span> {{ $user->role }}</p>
                        <p><span class="font-semibold">Status:</span>
                            <span class="{{ $user->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $user->status ? 'Active' : 'Inactive' }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="mt-6 text-right">
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Update User
                    </a>
                    @if ($user->vr_code && $user->company_code && $user->noc_number)
                        @else
                        <form action="{{ url('/admin/application/generate/' . $user->id) }}" method="POST"
                            class="inline-block">
                            @csrf <!-- Add CSRF token for security -->
                            <button type="submit"
                                class="bg-green-500 w-[80px] text-white px-4 py-2 rounded hover:bg-green-600 font-semibold focus:outline-none focus:ring-2 focus:ring-green-500">
                                Approve Now
                            </button>
                        </form>
                    @endif

                    <a href="{{ url('/admin/application') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Back to List
                    </a>
                </div>
            </div>


            <!-- Additional User Info -->
            <div class="border-t px-6 py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p><span class="font-semibold">V.R Code:</span> {{ $user->vr_code }}</p>
                        <p><span class="font-semibold">Range Code:</span> {{ $user->range_code }}</p>
                    </div>
                    <div>
                        <p><span class="font-semibold">Company Code:</span> {{ $user->company_code }}</p>
                        <p><span class="font-semibold">NOC no.:</span> {{ $user->noc_number }}</p>
                    </div>
                </div>
                <div class="mt-6 text-right">
                    <a href="#" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
