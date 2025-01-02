@extends('user.userBase')
@section('title', 'Verification')
@section('content')
    <div class="flex w-full flex-col lg:flex-row mt-10 md:mt-4">
        <!-- Left Section (Image) -->
        <div class="w-full lg:w-6/12  bg-orange-100 hidden md:flex">
            <div class="w-full h-screen relative">
                <img src="register.jpg" class="object-cover w-full h-full filter opacity-80" alt="">
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="absolute inset-0 flex items-center justify-center">
                    @if (!empty($logo?->meta_logo))
                        <img src="{{ asset('storage/images/setting/' . $logo->meta_logo) }}" alt="Company Logo"
                            class="h-20 md:h-32 object-contain">
                    @else
                        <img src="{{ asset('logo.png') }}" alt="" class="h-20 md:h-32 object-contain">
                    @endif
                </div>
            </div>
        </div>

        <!-- Right Section (Form) -->
        <div class="w-full lg:w-6/12 flex flex-1 items-center">
            <!-- Display Validation Errors -->

            <div class="w-full mx-6 lg:mx-12 md:p-8 p-3">
                <h2 class="text-4xl font-semibold text-center text-gray-800 mb-6"
                    style="font-family: 'Roboto Condensed', serif;">Become A Member</h2>
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

                <!-- Register Form -->


                <form method="POST" action="{{ route('user.register.verify') }}">
                    @csrf
                    <input id="email" type="text" name="email"
                        value="{{ old('email', request()->query('email')) }}"
                        class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                    <div class="mb-4">
                        <label for="otp" class="block mb-2 text-sm font-medium text-gray-700">Enter the OTP</label>
                        <input id="otp" type="number" name="otp" value="{{ old('otp') }}"
                            class="w-full px-4 py-2 border @error('otp') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                        @error('otp')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        @if (session('error'))
                            <p class="mt-2 text-sm text-red-600">{{ session('error') }}</p>
                        @endif
                    </div>

                    <div class="flex gap-2">
                        <div class="mb-3 w-6/12">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input id="password" type="password" name="password"
                                class="w-full px-4 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 w-6/12">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm
                                Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                class="w-full px-4 py-2 border @error('password_confirmation') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                            @error('password_confirmation')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="bg-teal-900 hover:bg-teal-700 text-white py-2 px-4 rounded-md">Verify
                        OTP</button>
                </form>
                <!-- Already Registered Link -->
                <div class="mt-6 text-center flex items-center justify-center mb-">
                    <hr class="flex-grow border-t border-teal-900">
                    <a href="{{ url('login') }}" class="text-sm text-teal-900 mx-1">Already have an account? Log in</a>
                    <a href="{{ route('password.request') }}" class="text-sm text-teal-900 mx-1">Forgot Password</a>
                    <hr class="flex-grow border-t border-teal-900">
                </div>

            </div>
        </div>
    </div>
@endsection
