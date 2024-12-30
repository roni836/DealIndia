@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')

    <div class="bg-gray-100">

        <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Investor Details Form</h1>
            <form action="{{ route('details.submit') }}" method="POST" enctype="multipart/form-data" id="investorForm">
                @csrf

                <!-- Personal Details -->
                <h2 class="text-xl font-semibold mt-4 mb-3">Personal Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="last_name" placeholder="Last Name" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="date" name="date_of_birth" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <select name="gender" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" name="religion" placeholder="Religion"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="email" name="email" placeholder="Email" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="tel" name="mobile" placeholder="Mobile" pattern="[0-9]{10}" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                </div>

                <!-- Banking Details -->
                <h2 class="text-xl font-semibold mt-6 mb-3">Banking Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="bank_name" placeholder="Bank Name" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="account_number" placeholder="Account Number" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="ifsc_code" placeholder="IFSC Code" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="account_holder_name" placeholder="Account Holder Name" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <select name="account_type" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                        <option value="">Select Account Type</option>
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                    </select>
                </div>

                <!-- Address -->
                <h2 class="text-xl font-semibold mt-6 mb-3">Address</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="street_address" placeholder="Street Address" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="city" placeholder="City" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="state" placeholder="State" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="country" placeholder="Country" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="text" name="postal_code" placeholder="Postal Code" pattern="\d{6}" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                </div>

                <!-- Documents -->
                <h2 class="text-xl font-semibold mt-6 mb-3">Documents</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1">Profile Photo</label>
                        <input type="file" name="photo"  required
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block mb-1">Aadhar Card (Image/PDF)</label>
                        <input type="file" name="aadhar_card" accept=".jpeg,.png,.pdf" required
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    </div>
                    <input type="text" name="aadhar_card_number" placeholder="Aadhar Card Number" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <div>
                        <label class="block mb-1">PAN Card (Image/PDF)</label>
                        <input type="file" name="pan_card" accept=".jpeg,.png,.pdf" required
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    </div>
                    <input type="text" name="pan_card_number" placeholder="PAN Card Number" required
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                </div>

                <!-- Custom Labels -->
                <div id="document">

                    <h2 class="text-xl font-semibold mt-6 mb-3">Custom Labels</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="doc-container">
                        <input type="text" name="inputs[0][name]" placeholder="Label 1 Name"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                        <input type="file" name="inputs[0][filename]" accept=".jpeg,.png,.pdf"
                            class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    </div>


                    <div>
                        <!-- ...existing code... -->
                        <button type="button" class="text-teal-600 hover:text-teal-700 font-medium"
                            id="add-document-button">
                            + Add Another Document
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-teal-500 text-white p-3 rounded mt-6 hover:bg-teal-600 transition">
                    Submit
                </button>
            </form>
        </div>

        <script>
            const form = document.getElementById('investorForm');
            form.addEventListener('submit', function(event) {
                const inputs = form.querySelectorAll('input[required], select[required]');
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
                    alert('Please fill all required fields.');
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                var i = 0;

                // Add new row
                $('#document').on('click', '#add-document-button', function() {
                    ++i;
                    $('#doc-container').append(
                        `<div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="doc-container">
                    <input type="text" name="inputs[${i}][name]" placeholder="Label 1 Name"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                    <input type="file" name="inputs[${i}][filename]" accept=".jpeg,.png,.pdf"
                        class="border border-gray-300 p-3 rounded focus:ring-2 focus:ring-teal-500 focus:outline-none">
                </div>`
                    );
                });
            });
        </script>
    </div>


@endsection
