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
                        <input type="text" name="first_name" value="{{ auth()->user()->first_name }}"
                            placeholder="First Name"
                            class="w-full bg-gray-50 border @error('first_name') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        {{-- @error('first_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror --}}
                    </div>

                    <!-- Last Name -->
                    <div>
                        <input type="text" name="last_name" placeholder="Last Name"
                            value="{{ auth()->user()->last_name }}"
                            class="w-full bg-gray-50 border @error('last_name') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        {{-- @error('last_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror --}}
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
                        <select name="religion"
                            class="w-full border @error('religion') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Religion</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                        </select>
                        @error('religion')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div>
                        <input type="email" name="email" value="{{ auth()->user()->email }}" placeholder="Email"
                            class="w-full border border-gray-300 bg-gray-50 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile -->
                    <div>
                        <input type="tel" name="mobile" value="{{ auth()->user()->mobile }}" placeholder="Mobile"
                            pattern="[0-9]{10}"
                            class="w-full border border-gray-300 bg-gray-50 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('mobile')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Banking Details -->
                <h2 class="text-xl font-semibold mt-6 mb-4">Banking Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bank Name -->
                    

                    <!-- Account Number -->
                    <div>
                        <input type="number" name="account_number" placeholder="Account Number"
                            class="w-full border @error('account_number') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('account_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- IFSC Code -->
                    <div>
                        <input type="text" id="ifsc_code" name="ifsc_code" placeholder="IFSC Code"
                            class="w-full border p-3 rounded focus:ring-2 @error('ifsc_code') border-red-500 @else border-gray-300 @enderror">
                            @error('ifsc_code')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="number" name="micr_number" placeholder="MICR Number"
                            class="w-full border @error('micr_number') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" readonly>
                        @error('micr_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bank Name -->
                    <div>
                        <input type="text" id="bank_name" name="bank_name" placeholder="Bank Name"
                            class="w-full border p-3 rounded focus:ring-2 @error('bank_name') border-red-500 @else border-gray-300 @enderror" readonly>
                            @error('bank_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Branch Name -->
                    <div>
                        <input type="text" id="branch_name" name="branch_name" placeholder="Branch Name"
                            class="w-full border p-3 rounded focus:ring-2 @error('branch_name') border-red-500 @else border-gray-300 @enderror" readonly>
                            @error('branch_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Loader -->
                    <div id="loader" class="hidden mt-2">
                        <svg class="animate-spin h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                        </svg>
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
                <h2 class="text-xl font-semibold mt-6 mb-4">Address</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Street Address -->
                    <div>
                        <input type="text" name="street_address" placeholder="Street Address"
                            class="w-full border @error('street_address') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('street_address')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="landmark" placeholder="Landmark"
                            class="w-full border @error('landmark') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('landmark')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" id="postal_code" name="postal_code" placeholder="Postal Code"
                            pattern="\d{6}"
                            class="w-full border p-3 rounded focus:ring-2 @error('postal_code') border-red-500 @else border-gray-300 @enderror">
                        <p id="postal_code_error" class="mt-2 border-gray-300 text-sm text-red-600"
                            style="display: none;">
                        </p>
                        @error('postal_code')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Loader -->
                    <div id="loader" class="hidden mt-2">
                        <svg class="animate-spin h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                        </svg>
                    </div>

                    <!-- City -->
                    <div>
                        <input type="text" id="city" name="city" placeholder="City"
                            class="w-full border p-3 rounded focus:ring-2 @error('city') border-red-500 @else border-gray-300 @enderror" readonly>
                        @error('city')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- State -->
                    <div>
                        <input type="text" id="state" name="state" placeholder="State"
                            class="w-full border p-3 rounded focus:ring-2 @error('state') border-red-500 @else border-gray-300 @enderror" readonly>
                        @error('state')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Country -->
                    <div>
                        <input type="text" id="country" name="country" placeholder="Country"
                            class="w-full border p-3 rounded focus:ring-2 @error('country') border-red-500 @else border-gray-300 @enderror"
                            value="India" readonly>
                    </div>
                </div>

                <!-- Documents -->
                <h2 class="text-xl font-semibold mt-6 mb-4">Documents</h2>
                <h4 class="text-md  mt-6 ">Aadhar Card (Image/PDF)</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Profile Photo -->


                    <!-- Aadhar Card -->
                    <div>
                        {{-- <label for="aadhar_card" class="block mb-2 font-medium">Aadhar Card (Image/PDF)</label> --}}
                        <input type="file" id="aadhar_card" name="aadhar_card" accept=".jpeg,.png,.pdf"
                            class="w-full border @error('aadhar_card') border-red-500 @else border-gray-300 @enderror
                        p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('aadhar_card')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Aadhar Card Number -->
                    <div class="">
                        <input type="text" name="aadhar_card_number" placeholder="Aadhar Card Number"
                            class="w-full border @error('aadhar_card_number') border-red-500 @else border-gray-300 @enderror
                        p-5  rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('aadhar_card_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <h4 class="text-md  mt-6 ">PAN Card (Image/PDF)</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- PAN Card -->
                    <div>
                        {{-- <label for="pan_card" class="block mb-2 font-medium">PAN Card (Image/PDF)</label> --}}
                        <input type="file" id="pan_card" name="pan_card" accept=".jpeg,.png,.pdf"
                            class="w-full border @error('pan_card') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('pan_card')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PAN Card Number -->
                    <div class="">
                        <input type="text" name="pan_card_number" placeholder="PAN Card Number"
                            class="w-full border @error('pan_card_number') border-red-500 @else border-gray-300 @enderror
                   p-5 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('pan_card_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                </div>


                <!-- Custom Labels -->
                <div id="document">

                    <h2 class="text-xl font-semibold mt-6 mb-3">Additional Documents</h2>
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

    <script>
        document.getElementById('postal_code').addEventListener('blur', function() {
            const postalCode = this.value.trim();
            const loader = document.getElementById('loader');
            const cityField = document.getElementById('city');
            const stateField = document.getElementById('state');
            const countryField = document.getElementById('country');

            // Clear previous data
            cityField.value = '';
            stateField.value = '';
            countryField.value = 'India';

            // Validate postal code pattern
            if (!/^\d{6}$/.test(postalCode)) {
                showError('postal_code_error', 'Invalid Postal Code');
                return;
            }

            // Hide any existing error message and show loader
            hideError('postal_code_error');
            loader.classList.remove('hidden');

            // Fetch data from the API
            fetch(`https://api.postalpincode.in/pincode/${postalCode}`)
                .then(response => response.json())
                .then(data => {
                    if (data[0].Status === 'Success') {
                        const {
                            District,
                            State
                        } = data[0].PostOffice[0];

                        // Populate city, state, and country fields
                        cityField.value = District;
                        stateField.value = State;
                        countryField.value = 'India';
                    } else {
                        showError('postal_code_error', 'No data found for this postal code');
                    }
                })
                .catch(error => {
                    console.error('Error fetching postal data:', error);
                    showError('postal_code_error', 'Failed to fetch data. Please try again.');
                })
                .finally(() => {
                    // Hide loader
                    loader.classList.add('hidden');
                });
        });

        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }

        function hideError(elementId) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = '';
            errorElement.style.display = 'none';
        }
    </script>

    <script>
        document.getElementById('ifsc_code').addEventListener('blur', function() {
            const ifscCode = this.value.trim().toUpperCase(); // Convert to uppercase for consistency
            const loader = document.getElementById('loader');
            const bankField = document.getElementById('bank_name');
            const branchField = document.getElementById('branch_name');
            const micrField = document.getElementById('micr_number');

            // Clear previous data
            bankField.value = '';
            branchField.value = '';
            micrField.value = '';

            // Validate IFSC Code pattern
            if (!/^[A-Z]{4}0[A-Z0-9]{6}$/.test(ifscCode)) {
                showError('ifsc_code_error', 'Invalid IFSC Code');
                return;
            }

            // Hide any existing error message and show loader
            hideError('ifsc_code_error');
            loader.classList.remove('hidden');

            // Fetch data from the API
            fetch(`https://ifsc.razorpay.com/${ifscCode}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Invalid IFSC Code');
                    }
                    return response.json();
                })
                .then(data => {
                    // Populate bank name and branch name
                    bankField.value = data.BANK;
                    branchField.value = data.BRANCH;
                    micrField.value = data.MICR;
                })
                .catch(error => {
                    console.error('Error fetching IFSC data:', error);
                    showError('ifsc_code_error', 'Failed to fetch data. Please try again.');
                })
                .finally(() => {
                    // Hide loader
                    loader.classList.add('hidden');
                });
        });

        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }

        function hideError(elementId) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = '';
            errorElement.style.display = 'none';
        }
    </script>

    <style>
        .hidden {
            display: none;
        }
    </style>


@endsection
