@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')

<div class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6">Details Form</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

     

        <form action="{{ route('details.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Personal Details -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Personal Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">First Name</label>
                        <input type="text" name="first_name" class="w-full border rounded p-2" value="{{ old('first_name') }}">
                        @error('first_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Last Name</label>
                        <input type="text" name="last_name" class="w-full border rounded p-2" value="{{ old('last_name') }}">
                        @error('last_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="w-full border rounded p-2" value="{{ old('date_of_birth') }}">
                        @error('date_of_birth') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Gender</label>
                        <select name="gender" class="w-full border rounded p-2">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ old('gender') === 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Religion</label>
                        <input type="text" name="religion" class="w-full border rounded p-2" value="{{ old('religion') }}">
                        @error('religion') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" name="email" class="w-full border rounded p-2" value="{{ old('email') }}">
                        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Mobile</label>
                        <input type="text" name="mobile" class="w-full border rounded p-2" value="{{ old('mobile') }}">
                        @error('mobile') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <!-- Banking Details -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Banking Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Bank Name</label>
                        <input type="text" name="bank_name" class="w-full border rounded p-2" value="{{ old('bank_name') }}">
                        @error('bank_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Account Number</label>
                        <input type="text" name="account_number" class="w-full border rounded p-2" value="{{ old('account_number') }}">
                        @error('account_number') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">IFSC Code</label>
                        <input type="text" name="ifsc_code" class="w-full border rounded p-2" value="{{ old('ifsc_code') }}">
                        @error('ifsc_code') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Account Holder Name</label>
                        <input type="text" name="account_holder_name" class="w-full border rounded p-2" value="{{ old('account_holder_name') }}">
                        @error('account_holder_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Account Type</label>
                        <select name="account_type" class="w-full border rounded p-2">
                            <option value="">Select Account Type</option>
                            <option value="Savings" {{ old('account_type') === 'Savings' ? 'selected' : '' }}>Savings</option>
                            <option value="Current" {{ old('account_type') === 'Current' ? 'selected' : '' }}>Current</option>
                        </select>
                        @error('account_type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <!-- Address Details -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Address Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Street Address</label>
                        <input type="text" name="street_address" class="w-full border rounded p-2" value="{{ old('street_address') }}">
                        @error('street_address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">City</label>
                        <input type="text" name="city" class="w-full border rounded p-2" value="{{ old('city') }}">
                        @error('city') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">State</label>
                        <input type="text" name="state" class="w-full border rounded p-2" value="{{ old('state') }}">
                        @error('state') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Country</label>
                        <input type="text" name="country" class="w-full border rounded p-2" value="{{ old('country') }}">
                        @error('country') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Postal Code</label>
                        <input type="text" name="postal_code" class="w-full border rounded p-2" value="{{ old('postal_code') }}">
                        @error('postal_code') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <!-- Upload Documents -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Upload Documents</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Aadhar Card</label>
                        <input type="file" name="aadhar_card" class="w-full border rounded p-2">
                        @error('aadhar_card') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">PAN Card</label>
                        <input type="file" name="pan_card" class="w-full border rounded p-2">
                        @error('pan_card') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
