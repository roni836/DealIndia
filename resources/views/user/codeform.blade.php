@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-6">
            <!-- Display Success or Error Messages -->
            @if (session('error'))
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

            <!-- Form -->
            <form action="{{ route('user.investerCodecheck') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
                @csrf
                <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Enter the Details from the Mail</h2>

                <!-- VR Code -->
                <div class="mb-5">
                    <label for="vr_code" class="block text-sm font-medium text-gray-700">VR Code</label>
                    <input type="text" id="vr_code" name="vr_code" value="{{ old('vr_code') }}"
                        placeholder="Enter VR Code"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('vr_code')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Range Code -->
                <div class="mb-5">
                    <label for="range_code" class="block text-sm font-medium text-gray-700">Range Code</label>
                    <input type="text" id="range_code" name="range_code" value="{{ old('range_code') }}"
                        placeholder="Enter Range Code"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('range_code')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Company Code -->
                <div class="mb-5">
                    <label for="company_code" class="block text-sm font-medium text-gray-700">Company Code</label>
                    <input type="text" id="company_code" name="company_code" value="{{ old('company_code') }}"
                        placeholder="Enter Company Code"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('company_code')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- NOC Number -->
                <div class="mb-5">
                    <label for="noc_number" class="block text-sm font-medium text-gray-700">NOC Number</label>
                    <input type="text" id="noc_number" name="noc_number" value="{{ old('noc_number') }}"
                        placeholder="Enter NOC Number"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('noc_number')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
