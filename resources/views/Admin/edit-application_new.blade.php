@extends('Admin.adminBase')

@section('title', 'Application Details')

@section('content')
<div class="container mx-auto px-4">
    <!-- User Information Section -->
    <div class="bg-white  rounded-lg overflow-hidden mb-6">
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">User Information</h4>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white p-4">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Role:</strong> {{ $user->role }}</p>
                    <p><strong>Status:</strong>
                        <span class="{{ $user->status ? 'text-green-500' : 'text-red-500' }}">
                            {{ $user->status ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Investor Details Section -->
    @if($user->investorDetails)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">Investor Details</h4>
        </div>
        <div class="p-6 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4 ">
                <!-- Personal Info Card -->
                <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                    <h5 class="font-semibold text-blue-600 text-xl py-2">Personal Info</h5>
                    <p><strong>Name:</strong> {{ $user->investorDetails->first_name }} {{ $user->investorDetails->last_name }}</p>
                    <p><strong>Gender:</strong> {{ $user->investorDetails->gender }}</p>
                    <p><strong>Date of Birth:</strong> {{ $user->investorDetails->date_of_birth }}</p>
                    <p><strong>Religion:</strong> {{ $user->investorDetails->religion }}</p>
                    <p><strong>Email:</strong> {{ $user->investorDetails->email }}</p>
                    <p><strong>Mobile:</strong> {{ $user->investorDetails->mobile }}</p>
                </div>

                <!-- Banking Info Card -->
                <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                    <h5 class="font-semibold text-blue-600 text-xl py-2">Banking Info</h5>
                    <p><strong>Bank Name:</strong> {{ $user->investorDetails->bank_name }}</p>
                    <p><strong>Account Number:</strong> {{ $user->investorDetails->account_number }}</p>
                    <p><strong>IFSC Code:</strong> {{ $user->investorDetails->ifsc_code }}</p>
                    <p><strong>Account Holder Name:</strong> {{ $user->investorDetails->account_holder_name }}</p>
                    <p><strong>Account Type:</strong> {{ $user->investorDetails->account_type }}</p>
                </div>

                <!-- Address Info Card -->
                <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                    <h5 class="font-semibold text-blue-600 text-xl py-2">Address Info</h5>
                    <p><strong>Street Address:</strong> {{ $user->investorDetails->street_address }}</p>
                    <p><strong>City:</strong> {{ $user->investorDetails->city }}</p>
                    <p><strong>State:</strong> {{ $user->investorDetails->state }}</p>
                    <p><strong>Country:</strong> {{ $user->investorDetails->country }}</p>
                    <p><strong>Postal Code:</strong> {{ $user->investorDetails->postal_code }}</p>
                </div>

                
                
            </div>
            <!-- Documents Info Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 ">
                
            <div class="bg-gray-100 shadow-lg rounded-lg p-4 space-y-2">
                
                <p><strong>Aadhar Card:</strong></p>
                <img src="{{ asset('storage/' . $user->investorDetails->aadhar_card) }}" alt="Aadhar Card" class="w-full md:w-1/2 lg:w-1/3 h-48 rounded-lg object-contain  ">
                <p><strong>Aadhar Card Number:</strong> {{ $user->investorDetails->aadhar_card_number }}</p>

                
            </div>
            <div class="bg-gray-100 shadow-lg space-y-2 rounded-lg p-4">
                
                

                <p><strong>Pan Card:</strong></p>
                <img src="{{ asset('storage/' . $user->investorDetails->pan_card) }}" alt="Pan Card" class="w-full md:w-1/2 lg:w-1/3 h-48 rounded-lg  object-contain ">
                <p><strong>Pan Card Number:</strong> {{ $user->investorDetails->pan_card_number }}</p>
            </div>
        </div>
    </div>
    @else
    <p>No investor details available.</p>
    @endif

    <!-- Generated Codes Section -->
    <div class="bg-white  overflow-hidden mb-6 p-6">
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">Generated Codes</h4>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">V.R Code:</span> {{ $user->vr_code }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">Range Code:</span> {{ $user->range_code }}</p>
                </div>
                <div>
                    <p class="text-sm md:text-base"><span class="font-semibold">Company Code:</span> {{ $user->company_code }}</p>
                    <p class="text-sm md:text-base"><span class="font-semibold">NOC no.:</span> {{ $user->noc_number }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions Section -->
    <div class="mt-6 flex flex-col md:flex-row justify-end space-y-2 md:space-y-0 md:space-x-2 m-2">
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
@endsection
