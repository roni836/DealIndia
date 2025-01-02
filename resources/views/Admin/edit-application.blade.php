@extends('Admin.adminBase')

@section('title', 'Application Details')

@section('content')
<div class="container mx-auto ">
    <!-- User Information Section -->
    <div class="bg-white hidden md:block rounded-lg overflow-hidden mb-6">
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">User Information</h4>
        </div>
        <div class=" bg-white p-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
           
                {{-- <div class="flex  justify-between items-center  "> --}}
                    
                    <div class="text-center">
                        <img src="{{ asset('user.png') }}" alt="" class="mx-auto">
                        <p><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
                    </div>
                    
                    {{-- <div class="inline-grid justify-center items-center">
                        <img src="{{ asset('role.png') }}" alt="" class="">
                        <p><strong>Role:</strong> {{ $user->role }}</p>
                    </div> --}}
                    <div class="text-center">
                        <img src="{{ asset('email.png') }}" alt="" class="mx-auto">
                        <p class=""><strong>Email:</strong> {{ $user->email }}</p>
                    </div>
                    <div class="text-center">
                        @if ($user->status)
                                <img src="{{ asset('active.png') }}" alt="Active" class="mx-auto">
                            @else
                                <img src="{{ asset('inactive.png') }}" alt="Inactive" class=" mx-auto">
                            @endif
                        <p><strong>Status:</strong>
                            <span class="{{ $user->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $user->status ? 'Active' : 'Inactive' }}
                            </span>
                        </p>
                    </div>
                    
                </div>
           
        </div>
    </div>
    <div class="bg-white  rounded-lg overflow-hidden md:hidden mb-6">
        <div class="bg-gray-200 px-6 py-4">
            <h4 class="text-lg font-semibold">User Information</h4>
        </div>
        <div class="p-3">
            <div class="grid grid-cols-1">
                <div class="bg-white text-sm space-y-2  ">
                    <p class="flex gap-1">
                        <img src="{{ asset('user.png') }}" alt="" class="w-5 h-5">
                        <strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}
                    </p>
                    <p class="flex gap-1">
                        <img src="{{ asset('email.png') }}" alt="" class="w-5 h-5">
                        <strong>Email:</strong> {{ $user->email }}
                    </p>
                    
                    <p class="flex gap-1">
                        
                        @if ($user->status)
                                <img src="{{ asset('active.png') }}" alt="Active" class="w-5 h-5" >
                            @else
                                <img src="{{ asset('inactive.png') }}" alt="Inactive" class="w-5 h-5" >
                            @endif
                            <strong>Status:</strong>
                            <span class="{{ $user->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $user->status ? 'Active' : 'Inactive' }}
                            </span>
                        </p>
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
                <div class="bg-gray-100  rounded-lg p-4 text-sm md:text-md space-y-1 ">
                    <h5 class="font-semibold text-blue-600 text-xl py-2">Personal Info</h5>
                    <p><strong>Name:</strong> {{ $user->investorDetails->first_name }} {{ $user->investorDetails->last_name }}</p>
                    <p><strong>Gender:</strong> {{ $user->investorDetails->gender }}</p>
                    <p><strong>Date of Birth:</strong> {{ $user->investorDetails->date_of_birth }}</p>
                    <p><strong>Religion:</strong> {{ $user->investorDetails->religion }}</p>
                    <p><strong>Email:</strong> {{ $user->investorDetails->email }}</p>
                    <p><strong>Mobile:</strong> {{ $user->investorDetails->mobile }}</p>
                </div>

                <!-- Banking Info Card -->
                <div class="bg-gray-100  rounded-lg p-4 text-sm md:text-md space-y-1">
                    <h5 class="font-semibold text-blue-600 text-xl py-2 ">Banking Info</h5>
                    <p><strong>Bank Name:</strong> {{ $user->investorDetails->bank_name }}</p>
                    <p><strong>Account Number:</strong> {{ $user->investorDetails->account_number }}</p>
                    <p><strong>IFSC Code:</strong> {{ $user->investorDetails->ifsc_code }}</p>
                    <p><strong>Account Holder Name:</strong> {{ $user->investorDetails->account_holder_name }}</p>
                    <p><strong>Account Type:</strong> {{ $user->investorDetails->account_type }}</p>
                </div>

                <!-- Address Info Card -->
                <div class="bg-gray-100  rounded-lg p-4 text-sm md:text-md space-y-1">
                    <h5 class="font-semibold text-blue-600 text-xl py-2">Address Info</h5>
                    <p><strong>Street Address:</strong> {{ $user->investorDetails->street_address }}</p>
                    <p><strong>City:</strong> {{ $user->investorDetails->city }}</p>
                    <p><strong>State:</strong> {{ $user->investorDetails->state }}</p>
                    <p><strong>Country:</strong> {{ $user->investorDetails->country }}</p>
                    <p><strong>Postal Code:</strong> {{ $user->investorDetails->postal_code }}</p>
                </div>
            </div>
            <!-- Documents Info Card -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 ">
                
            <div class="bg-gray-100  rounded-lg p-2 space-y-2 ">
                <p><strong>Aadhar Card:</strong></p>
                <img src="{{ asset('storage/' . $user->investorDetails->aadhar_card) }}" alt="Aadhar Card" class=" h-48 p-2 rounded-lg object-contain  ">
                <p class="px-2"><strong>Aadhar Card Number:</strong> {{ $user->investorDetails->aadhar_card_number }}</p>
 
            </div>
            <div class="bg-gray-100 rounded-lg p-2 space-y-2">
                <p><strong>Pan Card:</strong></p>
                <img src="{{ asset('storage/' . $user->investorDetails->pan_card) }}" alt="Pan Card" class=" h-48 p-2 rounded-lg  object-contain ">
                <p class="px-2"><strong>Pan Card Number:</strong> {{ $user->investorDetails->pan_card_number }}</p>
            </div>
            <div class="bg-gray-100  rounded-lg p-2">
                <p><strong>Profile Picture:</strong></p>
                <img src="{{ asset('storage/' . $user->investorDetails->photo) }}" alt="Profile photo" class=" h-48 px-2 rounded-lg  object-contain ">
            </div>
        </div>
    </div>
    </div>

    @if ($user->investorDetails->additional_documents && $user->investorDetails->additional_documents->count() > 0)
        <div class="mt-6 bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gray-200 px-6 py-4">
                <h4 class="text-lg font-semibold">Additional Documents</h4>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($user->investorDetails->additional_documents as $document)
                        <div class="bg-gray-100 shadow-md rounded-lg p-4">
                            <p><strong>Document Name:</strong> {{ $document->name }}</p>
                            @php
                                $extension = pathinfo($document->filename, PATHINFO_EXTENSION);
                            @endphp
                            <p><strong>Document Extension:</strong> {{$extension }}</p>
                            

                            @if ($extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
                                <img src="{{ asset('storage/' . $document->filename) }}" alt="Document" class="w-full h-48 p-2 rounded-lg object-contain">
                            @else
                                <p>
                                    <strong>File:</strong>
                                    <a href="{{ asset('storage/' . $document->filename) }}" target="_blank" class="text-blue-500 underline">
                                        View Document
                                    </a>
                                </p>
                            @endif
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @else
    <div class="bg-white mt-4 mb-4 py-4 rounded-lg">
        <p class="font-semibold text-md m-4 ">No investor details available.</p>
    </div>
    @endif

    
    
{{-- </div> --}}

 


<!-- Generated Codes Section -->
<div class=" overflow-hidden mb-6 mt-4 rounded-lg">
    <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
        <h4 class="text-lg font-semibold">Generated Codes</h4>
    </div>
    <div class="p-6 bg-white">
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
<div class="mt-6 p-4 flex flex-col md:flex-row justify-end space-y-2 md:space-y-0 md:space-x-2 m-2">
    {{-- <a href="#" class="bg-blue-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-blue-600 text-sm md:text-base text-center">
        Update User
    </a> --}}
    <a href="{{ url('/admin/application') }}"
        class="bg-gray-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-gray-600 text-sm md:text-base text-center">
        Back to List
    </a>
    @if ($user->investorDetails && $user->vr_code && $user->company_code && $user->noc_number)
    
@else
    @if ($user->investorDetails) 
    <form action="{{ url('/admin/application/generate/' . $user->id) }}" method="POST" class="inline-block w-full md:w-auto">
        @csrf
        <button type="submit"
            class="bg-green-500 text-white w-full md:w-auto px-4 py-2 rounded hover:bg-green-600 font-semibold focus:outline-none focus:ring-2 focus:ring-green-500 text-sm md:text-base text-center">
            Approve Now
        </button>
    </form>
    @else
        <p class="text-red-500">Investor details are required to approve this user.</p>
    @endif
@endif

    
</div>
@endsection
