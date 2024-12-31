@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6',
                });
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Whoops! Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33',
                });
            });
        </script>
    @endif

    <div class="bg-gray-100">

        <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Investor Details Form</h1>
            <form action="{{ route('details.submit') }}" method="POST" enctype="multipart/form-data" id="investorForm">
                @csrf

                <!-- Personal Details -->
                <h2 class="text-xl font-semibold mt-4 mb-6">Personal Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div>
                        <input type="text" name="first_name" placeholder="First Name"
                            class="w-full border @error('first_name') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div>
                        <input type="text" name="last_name" placeholder="Last Name"
                            class="w-full border @error('last_name') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('last_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <input type="date" name="date_of_birth"
                            class="w-full border @error('date_of_birth') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('date_of_birth')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div>
                        <select name="gender"
                            class="w-full border @error('gender') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Religion -->
                    <div>
                        <input type="text" name="religion" placeholder="Religion"
                            class="w-full border @error('religion') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('religion')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" value="{{ auth()->user()->email }}" disabled
                            placeholder="Email"
                            class="w-full border border-gray-300 bg-gray-50 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        {{-- @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror --}}
                    </div>

                    <!-- Mobile -->
                    <div>
                        <input type="tel" name="mobile" value="{{ auth()->user()->mobile }}" disabled
                            placeholder="Mobile" pattern="[0-9]{10}"
                            class="w-full border border-gray-300 bg-gray-50 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        {{-- @error('mobile')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror --}}
                    </div>
                </div>

                <!-- Banking Details -->
                <h2 class="text-xl font-semibold mt-6 mb-4">Banking Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bank Name -->
                    <div>
                        <input type="text" name="bank_name" placeholder="Bank Name"
                            class="w-full border @error('bank_name') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('bank_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Account Number -->
                    <div>
                        <input type="text" name="account_number" placeholder="Account Number"
                            class="w-full border @error('account_number') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('account_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- IFSC Code -->
                    <div>
                        <input type="text" name="ifsc_code" placeholder="IFSC Code"
                            class="w-full border @error('ifsc_code') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('ifsc_code')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Account Holder Name -->
                    <div>
                        <input type="text" name="account_holder_name" placeholder="Account Holder Name"
                            class="w-full border @error('account_holder_name') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('account_holder_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Account Type -->
                    <div>
                        <select name="account_type"
                            class="w-full border @error('account_type') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Account Type</option>
                            <option value="Savings">Savings</option>
                            <option value="Current">Current</option>
                        </select>
                        @error('account_type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <!-- Address -->
                <h2 class="text-xl font-semibold mt-6 mb-3">Address</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="street_address" placeholder="Street Address"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('street_address')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="text" name="city" placeholder="City"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('city')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="text" name="state" placeholder="State"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('state')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="text" name="country" placeholder="Country"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('country')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="text" name="postal_code" placeholder="Postal Code" pattern="\d{6}"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('postal_code')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Documents -->
                <h2 class="text-xl font-semibold mt-6 mb-3">Documents</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1">Profile Photo</label>
                        <input type="file" name="photo"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-1">Aadhar Card (Image/PDF)</label>
                        <input type="file" name="aadhar_card" accept=".jpeg,.png,.pdf"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('aadhar_card')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="text" name="aadhar_card_number" placeholder="Aadhar Card Number"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('aadhar_card_number')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                        <label class="block mb-1">PAN Card (Image/PDF)</label>
                        <input type="file" name="pan_card"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('pan_card')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="text" name="pan_card_number" placeholder="PAN Card Number"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('pan_card_number')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Custom Labels -->
                <div id="document">

                    <h2 class="text-xl font-semibold mt-6 mb-3">Custom Labels</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="doc-container">
                        <input type="text" name="inputs[0][name]" placeholder="Label 1 Name"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('inputs[0][name]')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <input type="file" name="inputs[0][filename]" accept=".jpeg,.png,.pdf"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('inputs[0][filename]')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        <div>
                            <!-- ...existing code... -->
                            <button type="button" class="text-blue-600 hover:text-blue-700 font-medium"
                                id="add-document-button">
                                + Add Another Document
                            </button>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white p-3 rounded mt-6 hover:bg-blue-600 transition">
                        Submit
                    </button>
            </form>
        </div>

        {{-- <script>
            const form = document.getElementById('investorForm');
            form.addEventListener('submit', function(event) {
                const inputs = form.querySelectorAll('input[ ], select[ ]');
                let valid = true;

                inputs.forEach(input => {
                    if (!input.value) {
                        input.classList.add('border-red-500');
                        valid = false;
                    } else {
                        input.classList.remove('border-red-500');
                    }
                });

                if (!valid) {
                    event.preventDefault();
                    alert('Please fill all   fields.');
                }
            });
        </script> --}}

        <script>
            $(document).ready(function() {
                var i = 0;

                // Add new row
                $('#document').on('click', '#add-document-button', function() {
                    ++i;
                    $('#doc-container').append(
                        `<div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="doc-container">
                    <input type="text" name="inputs[${i}][name]" placeholder="Label 1 Name"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                           @error('inputs[${i}][name]')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="file" name="inputs[${i}][filename]" accept=".jpeg,.png,.pdf"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                          @error('inputs[${i}][filename]')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
2                </div>`
                    );
                });
            });
        </script>
    </div>


@endsection
