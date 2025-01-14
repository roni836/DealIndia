@extends('user.userBase')
@section('title', '')
@section('content')


<div class="flex mt-10 bg-gray-300">
  <!-- Sidebar -->
  @include('user.include.sidebar')
  <!-- Main Content -->
  <div class="flex-1 flex flex-col  ">
    <!-- Navbar -->
    <div class="min-h-screen bg-gray-50 p-4 md:p-8">
      <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
          <div>
            <h1 class="text-3xl font-bold text-gray-800">Detailed member overview</h1>
            <p class="text-gray-600 mt-2">Review the submitted details below.</p>
          </div>
          {{-- <button class="flex items-center gap-2 bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition-colors">
                  <i class="fas fa-edit"></i> Edit Details
                </button> --}}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Personal Details Section -->
          <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex items-center gap-3 mb-4">
              {{-- <i class="fas fa-user text-teal-600 text-xl"></i> --}}
              <img src="{{ asset('storage/' . $investor->photo) }}" class="h-10  object-contain rounded-full">

              <h2 class="text-xl font-semibold">Personal Details</h2>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-1">
                <p class="text-sm text-gray-500">First Name</p>
                <p class="font-medium">{{ $investor->first_name }}</p>
              </div>
              <div class="space-y-1">
                <p class="text-sm text-gray-500">Last Name</p>
                <p class="font-medium">{{ $investor->last_name }}</p>
              </div>
              <div class="space-y-1">
                <p class="text-sm text-gray-500">Date of Birth</p>
                <p class="font-medium">{{ $investor->date_of_birth }}</p>
              </div>
              <div class="space-y-1">
                <p class="text-sm text-gray-500">Gender</p>
                <p class="font-medium">{{ $investor->gender }}</p>
              </div>
              <div class="space-y-1">
                <p class="text-sm text-gray-500">Religion</p>
                <p class="font-medium">{{ $investor->religion }}</p>
              </div>

              <div class="space-y-1">
                <p class="text-sm text-gray-500">Contact Number</p>
                <p class="font-medium">{{$investor->mobile}}</p>
              </div>
              <div class="space-y-1">
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-medium">{{$investor->email}}</p>
              </div>


            </div>
          </div>

          <!-- Banking Details Section -->
          <div class="bg-white p-6 rounded-xl shadow-md">

            <div class="flex items-center gap-3 mb-4">
              <i class="fas fa-university text-teal-600 text-xl"></i>
              <h2 class="text-xl font-semibold">Banking Details</h2>
            </div>
            <div class="space-y-4">
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">Account Holder</p>
                  <p class="font-medium">{{$investor->account_holder_name}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">Bank Name</p>
                  <p class="font-medium">{{$investor->bank_name}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">Account Number</p>
                  <p class="font-medium">{{$investor->account_number}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">IFSC Code</p>
                  <p class="font-medium">{{$investor->ifsc_code}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">MICR Number</p>
                  <p class="font-medium">{{$investor->micr_number}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">Branch Name</p>
                  <p class="font-medium">{{$investor->branch_name}}</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <i class="fas fa-credit-card text-gray-400 mt-1"></i>
                <div>
                  <p class="text-sm text-gray-500">Account Type</p>
                  <p class="font-medium">{{$investor->account_type}}</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Address Details Section -->
          <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex items-center gap-3 mb-4">
              <i class="fas fa-map-marker-alt text-teal-600 text-xl"></i>
              <h2 class="text-xl font-semibold">Address Details</h2>
            </div>
            <div class="space-y-3">
              <div>
                <p class="text-sm text-gray-500">Street Address</p>
                <p class="font-medium">{{$investor->street_address}}</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">City</p>
                <p class="font-medium">{{$investor->city}}</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">State</p>
                <p class="font-medium">{{$investor->state}}</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Postal Code</p>
                <p class="font-medium">{{$investor->postal_code}}</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Country</p>
                <p class="font-medium">{{$investor->country}}</p>
              </div>
            </div>
          </div>

          <!-- Documents Section -->
          <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex items-center gap-3 mb-4">
              <i class="fas fa-file-alt text-teal-600 text-xl"></i>
              <h2 class="text-xl font-semibold">Uploaded Documents</h2>
            </div>
            <div class="space-y-4">
              <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                  <p class="font-medium">Aadhar Card</p>
                  <p class="text-sm text-gray-500">
                    {{-- {{$investor->aadhar_card}} --}}

                    <img src="{{ asset('storage/' . $investor->aadhar_card) }}" alt="Company Logo"
                      class="h-20 w-auto">
                  </p>

                  <span class="bg-orange-100 px-3 rounded-xl mt-1 py-1">{{$investor->aadhar_card_number}}</span>
                </div>
                {{-- <div class="flex gap-2">
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-download"></i>
                        </button>
                      </div> --}}
              </div>
              <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                  <p class="font-medium">PAN Card</p>
                  <p class="text-sm text-gray-500">
                    <img src="{{ asset('storage/' . $investor->pan_card) }}" alt="Company Logo"
                      class="h-20 w-auto">
                  </p>
                  <span class="bg-orange-100 px-3 rounded-xl mt-1 py-1">{{$investor->pan_card_number}}</span>

                </div>
                {{-- <div class="flex gap-2">
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-download"></i>
                        </button>
                      </div> --}}
              </div>
              {{-- <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                      <div>
                        <p class="font-medium">Salary Slip</p>
                        <p class="text-sm text-gray-500">2024-12-01</p>
                      </div>
                      <div class="flex gap-2">
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-teal-600 hover:bg-teal-50 rounded-full">
                          <i class="fas fa-download"></i>
                        </button>
                      </div>
                    </div> --}}
            </div>
          </div>
        </div>

        <!-- Additional Documents Section (Optional) -->
        @if($additionalDocuments && $additionalDocuments->count() > 0)
        <div class="bg-white shadow-lg rounded-lg mt-4 mb-6">
          <div class="flex items-center gap-3 p-6">
            <i class="fas fa-file-alt text-teal-600 text-xl"></i>
            <h4 class="text-lg font-semibold">Additional Documents</h4>
          </div>
          <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($additionalDocuments as $document)
            <div class="bg-gray-100 p-4 rounded-lg">
              <p><strong>Name:</strong> {{ $document->name }}</p>
              @php
              $extension = pathinfo($document->filename, PATHINFO_EXTENSION);
              @endphp
              @if(in_array($extension, ['jpeg', 'jpg', 'png']))
              <img src="{{ asset('storage/' . $document->filename) }}" alt="Document" class="rounded-lg w-full h-48 object-contain">
              @else
              <a href="{{ asset('storage/' . $document->filename) }}" target="_blank" class="text-blue-500 underline">
                View Document
              </a>
              @endif
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Action Buttons -->
        {{-- <div class="mt-8 flex flex-wrap gap-4">
                <button class="flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
                  <i class="fas fa-download"></i> Download All Documents
                </button>
                <button class="flex items-center gap-2 bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition-colors">
                  Submit Final
                </button>
              </div> --}}
      </div>
    </div>

  </div>
</div>

@endsection