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

    <div class="bg-gray-100 px-4 py-10 ">

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
                        <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}"
                            class="w-full border @error('date_of_birth') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('date_of_birth')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Gender -->
                    <div>
                        <select name="gender" id="gender"
                            class="w-full border @error('gender') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Religion -->

                    <div>
                        <select name="religion" id="religion"
                            class="w-full border @error('religion') border-red-500 @else border-gray-300 @enderror
                                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Religion</option>
                            <option value="Hindu" {{ old('religion') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Muslim" {{ old('religion') == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                            <option value="Sikh" {{ old('religion') == 'Sikh' ? 'selected' : '' }}>Sikh</option>
                            <option value="Christian" {{ old('religion') == 'Christian' ? 'selected' : '' }}>Christian
                            </option>
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

                    <div>
                        <select name="account_type"
                            class="w-full border @error('account_type') border-red-500 @else border-gray-300 @enderror p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Account Type</option>
                            <option value="Savings" {{ old('account_type') == 'Savings' ? 'selected' : '' }}>Savings
                            </option>
                            <option value="Current" {{ old('account_type') == 'Current' ? 'selected' : '' }}>Current
                            </option>
                        </select>
                        @error('account_type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <!-- Account Number -->
                    <div>
                        <input type="number" name="account_number" value="{{ old('account_number') }}"
                            placeholder="Account Number"
                            class="w-full border @error('account_number') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('account_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- IFSC Code -->
                    <div>
                        <label for="ifsc_code" class="sr-only">IFSC Code</label>
                        <input type="text" id="ifsc_code" name="ifsc_code" value="{{ old('ifsc_code') }}"
                            placeholder="IFSC Code"
                            class="w-full border p-3 rounded focus:ring-2 @error('ifsc_code') border-red-500 @else border-gray-300 @enderror"
                            autocomplete="off">
                        @error('ifsc_code')
                            <p id="ifsc_code_error" class="mt-2 text-sm text-red-600" aria-live="polite">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="micr_number" class="sr-only">MICR Number</label>
                        <input type="text" id="micr_number" name="micr_number" value="{{ old('micr_number') }}"
                            placeholder="MICR Number"
                            class="w-full border p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none @error('micr_number') border-red-500 @else border-gray-300 @enderror"
                            readonly>
                        @error('micr_number')
                            <p id="micr_number_error" class="mt-2 text-sm text-red-600" aria-live="polite">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="bank_name" class="sr-only">Bank Name</label>
                        <input type="text" id="bank_name" name="bank_name" value="{{ old('bank_name') }}"
                            placeholder="Bank Name"
                            class="w-full border p-3 rounded focus:ring-2 @error('bank_name') border-red-500 @else border-gray-300 @enderror"
                            readonly>
                        @error('bank_name')
                            <p id="bank_name_error" class="mt-2 text-sm text-red-600" aria-live="polite">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="branch_name" class="sr-only">Branch Name</label>
                        <input type="text" id="branch_name" name="branch_name" value="{{ old('branch_name') }}"
                            placeholder="Branch Name"
                            class="w-full border p-3 rounded focus:ring-2 @error('branch_name') border-red-500 @else border-gray-300 @enderror"
                            readonly>
                        @error('branch_name')
                            <p id="branch_name_error" class="mt-2 text-sm text-red-600" aria-live="polite">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Account Holder Name -->
                    <div>
                        <input type="text" name="account_holder_name" value="{{ old('account_holder_name') }}"
                            placeholder="Account Holder's Name"
                            class="w-full border @error('account_holder_name') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('account_holder_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                </div>


                <!-- Address -->
                <h2 class="text-xl font-semibold mt-6 mb-4">Address</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Street Address -->
                    <div>
                        <input type="text" name="street_address" value="{{ old('street_address') }}"
                            placeholder="Street Address"
                            class="w-full border @error('street_address') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('street_address')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="landmark" value="{{ old('landmark') }}" placeholder="Landmark"
                            class="w-full border @error('landmark') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('landmark')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="number" id="postal_code" value="{{ old('postal_code') }}" name="postal_code"
                            placeholder="Postal Code" pattern="\d{6}"
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
                    <!-- Loader -->
                    <!-- City -->
                    <div>
                        <input type="text" id="city" name="city" value="{{ old('city') }}"
                            placeholder="City"
                            class="w-full border p-3 rounded focus:ring-2 @error('city') border-red-500 @else border-gray-300 @enderror"
                            readonly>
                        @error('city')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- State -->
                    <div>
                        <input type="text" id="state" name="state" value="{{ old('state') }}"
                            placeholder="State"
                            class="w-full border p-3 rounded focus:ring-2 @error('state') border-red-500 @else border-gray-300 @enderror"
                            readonly>
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

                <div class="mt-4">
                    <input type="checkbox" id="generate_new_code" name="generate_new_code" value="yes"
                        {{ old('generate_new_code') == 'yes' ? 'checked' : '' }}
                        class="mr-2 rounded border-gray-300 focus:ring-blue-500">
                    <label for="generate_new_code" class="text-sm text-gray-700">Do you want to generate New VR code and
                        NOC number?</label>
                </div>

                <!-- Documents -->
                <h2 class="text-xl font-semibold mt-6 mb-4">Documents</h2>
                <!-- Photo -->
                <h4 class="text-md font-semibold mt-6 mb-4">Profile Picture</h4>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="file" name="photo" id="photo" accept="image/*" placeholder="profile pic"
                        class="w-full  focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        onchange="previewImage(event)">
                    @error('photo')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div class="mt-4">
                        <img id="photoPreview" src="#" alt="Photo Preview"
                            class="hidden  h-24 object-contain border border-gray-300">
                    </div>
                </div>
                <h4 class="text-md  mt-6 ">Aadhar Card (Image/PDF)</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Profile Photo -->


                    <!-- Aadhar Card -->
                    <div>
                        {{-- <label for="aadhar_card" class="block mb-2 font-medium">Aadhar Card (Image/PDF)</label> --}}
                        <input type="file" id="aadhar_card" name="aadhar_card" accept=".jpeg,.png,.pdf"
                            class="w-full @error('aadhar_card') border-red-500 @else border-gray-300 @enderror
                        p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('aadhar_card')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Aadhar Card Number -->
                    <div class="">
                        <input type="text" id="aadhar_card_number" value="{{ old('aadhar_card_number') }}" name="aadhar_card_number" 
                            placeholder="Aadhar Card Number"
                            class="w-full border border-gray-300 p-5 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <p id="aadhar_card_error" class="mt-2 text-sm text-red-600"></p>
                    </div>
                </div>
                <h4 class="text-md  mt-6 ">PAN Card (Image/PDF)</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- PAN Card -->
                    <div>
                        {{-- <label for="pan_card" class="block mb-2 font-medium">PAN Card (Image/PDF)</label> --}}
                        <input type="file" id="pan_card" name="pan_card" accept=".jpeg,.png,.pdf"
                            class="w-full  @error('pan_card') border-red-500 @else border-gray-300 @enderror
                   p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('pan_card')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PAN Card Number -->
                    
                    <div class="">
                        <input type="text" id="pan_card_number" value="{{ old('pan_card_number') }}" name="pan_card_number" 
                            placeholder="PAN Card Number"
                            class="w-full border border-gray-300 p-5 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <p id="pan_card_error" class="mt-2 text-sm text-red-600"></p>
                    </div>

                </div>


                <!-- Custom Labels -->
                <div id="document">

                    <h2 class="text-xl font-semibold mt-6 mb-3">Additional Documents</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="doc-container">
                        <input type="text" name="inputs[0][name]" value="{{ old('inputs[0][name]') }}"
                            placeholder="Document Name"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('inputs[0][name]')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <input type="file" name="inputs[0][filename]" accept=".jpeg,.png,.pdf"
                            class=" focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('inputs[0][filename]')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <!-- ...existing code... -->
                        <button type="button" class="text-blue-600 hover:text-blue-700 font-medium"
                            id="add-document-button">
                            + Add Another Document
                        </button>
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
                        `
                    <input type="text" name="inputs[${i}][name]" value="{{ old('inputs[${i}][name]') }}" placeholder="Document Name"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                         
                    <input type="file" name="inputs[${i}][filename]" accept=".jpeg,.png,.pdf"
                        class=" focus:ring-2 focus:ring-blue-500 focus:outline-none">
                `
                    );
                });
            });
        </script>
    </div>

    {{-- profile preview --}}

    <script>
        function previewImage(event) {
            const photoPreview = document.getElementById('photoPreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.classList.remove('hidden');
                };

                reader.readAsDataURL(file);
            } else {
                photoPreview.src = '#';
                photoPreview.classList.add('hidden');
            }
        }
    </script>

    <script>
        document.getElementById('postal_code').addEventListener('blur', async function() {
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

            hideError('postal_code_error');
            loader.classList.remove('hidden'); // Show loader

            try {
                const response = await fetch(`https://api.postalpincode.in/pincode/${postalCode}`);
                const data = await response.json();

                if (data[0]?.Status === 'Success') {
                    const postOffice = data[0].PostOffice[0];
                    cityField.value = postOffice?.District || '';
                    stateField.value = postOffice?.State || '';
                } else {
                    showError('postal_code_error', 'No data found for this postal code');
                }
            } catch (error) {
                console.error('Error fetching postal data:', error);
                showError('postal_code_error', 'Failed to fetch data. Please try again.');
            } finally {
                loader.classList.add('hidden'); // Hide loader
            }
        });

        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = message;
            errorElement.style.display = 'block';
            errorElement.setAttribute('aria-live', 'assertive'); // Accessibility enhancement
        }

        function hideError(elementId) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = '';
            errorElement.style.display = 'none';
        }
    </script>

    <script>
        // Set the max date for the date picker to 18 years ago
        document.addEventListener('DOMContentLoaded', function() {
            const dateOfBirthInput = document.getElementById('date_of_birth');
            const today = new Date();

            // Calculate the date 18 years ago
            const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate())
                .toISOString()
                .split('T')[0];

            // Set the max attribute to the calculated date
            dateOfBirthInput.setAttribute('max', maxDate);
        });
    </script>

    <script>
        document.getElementById('ifsc_code').addEventListener('blur', function() {
            const ifsc = this.value.trim();
            const bankNameInput = document.getElementById('bank_name');
            const branchNameInput = document.getElementById('branch_name');
            const micrInput = document.getElementById('micr_number');

            if (ifsc) {
                fetch(`https://ifsc.razorpay.com/${ifsc}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Invalid IFSC code');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Populate the fields with the fetched data
                        bankNameInput.value = data.BANK || '';
                        branchNameInput.value = data.BRANCH || '';
                        micrInput.value = data.MICR || '';
                    })
                    .catch(error => {
                        console.error('Error fetching bank details:', error);
                        alert('Could not fetch bank details. Please ensure the IFSC code is valid.');

                        // Clear fields in case of error
                        bankNameInput.value = '';
                        branchNameInput.value = '';
                        micrInput.value = '';
                    });
            } else {
                // Clear fields if IFSC input is empty
                bankNameInput.value = '';
                branchNameInput.value = '';
                micrInput.value = '';
            }
        });
    </script>



    <style>
        .hidden {
            display: none;
        }

        input.error {
            border-color: #ff4d4d;
            /* Red border for invalid fields */
            background-color: #ffe6e6;
            /* Light red background */
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('date_of_birth');

            // Get today's date
            const today = new Date();

            // Calculate the maximum allowed date for 18+ (18 years before today)
            const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());

            // Format the date as YYYY-MM-DD for the input field
            const formattedMaxDate = maxDate.toISOString().split('T')[0];

            // Set the max attribute of the date input
            dateInput.setAttribute('max', formattedMaxDate);
        });
    </script>

<script>
    document.getElementById('aadhar_card_number').addEventListener('input', function () {
        validateAadhar(this);
    });

    document.getElementById('pan_card_number').addEventListener('input', function () {
        validatePan(this);
    });

    function validateAadhar(input) {
        const value = input.value;
        const errorField = document.getElementById('aadhar_card_error');
        const regex = /^[0-9]{12}$/;

        if (!regex.test(value)) {
            errorField.textContent = 'Aadhar Card Number must be a 12-digit number.';
            input.classList.add('border-red-500');
            input.classList.remove('border-gray-300');
        } else {
            errorField.textContent = '';
            input.classList.add('border-gray-300');
            input.classList.remove('border-red-500');
        }
    }

    function validatePan(input) {
        const value = input.value.toUpperCase(); // PAN is case-sensitive; convert to uppercase
        input.value = value; // Update the input to display uppercase
        const errorField = document.getElementById('pan_card_error');
        const regex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;

        if (!regex.test(value)) {
            errorField.textContent = 'PAN Card Number is Invalid.';
            input.classList.add('border-red-500');
            input.classList.remove('border-gray-300');
        } else {
            errorField.textContent = '';
            input.classList.add('border-gray-300');
            input.classList.remove('border-red-500');
        }
    }
</script>

@endsection
