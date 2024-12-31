@extends('user.userBase')
@section('title', 'Login Work')
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
            {{-- @if ($errors->any())
            <div class="mb-4">
                <div class="text-red-600 font-medium">Whoops! Something went wrong.</div>
                <ul class="mt-2 text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
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
                    document.addEventListener('DOMContentLoaded', function () {
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
            <form method="POST" action="{{ route('user.register') }}">
                @csrf

                <!-- Name Field -->
                <div class="flex flex-col md:flex-col gap-4">
                    <!-- First Name Field -->
                    <div class="w-full w-6/12 mb-4">
                        <label for="first_name" class="block text-sm font-medium mb-2 text-gray-700">First Name</label>
                        <input id="first_name" type="text" placeholder="Your First Name" name="first_name"
                            value="{{ old('first_name') }}"
                            class="w-full px-4 py-2 border @error('first_name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name Field -->
                    <div class="w-full w-6/12 mb-4">
                        <label for="last_name" class="block text-sm font-medium mb-2 text-gray-700">Last Name</label>
                        <input id="last_name" type="text" placeholder="Your Last Name" name="last_name"
                            value="{{ old('last_name') }}"
                            class="w-full px-4 py-2 border @error('last_name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @error('last_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>



                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" placeholder="Your E-Mail" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender Field -->
                <!-- <div class="mb-4">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender"
                        class="w-full px-4 py-2 border  @error('gender') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    @error('gender')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div> -->

                <!-- Date of Birth Field -->
                
                    <!-- <div class="mb-4 w-6/12">
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-700">Date Of Birth</label>
                        <input id="dob" type="date" name="dob" value="{{ old('dob') }}"
                            class="w-full px-4 py-2 border @error('dob') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @error('dob')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div> -->

                    <!-- Contact Number Field -->
                    <div class="mb-4">
                        <label for="mobile" class="block mb-2 text-sm font-medium text-gray-700">Contact No.</label>
                        <input id="mobile" placeholder="+1234567890" type="tel" name="mobile"
                            value="{{ old('mobile') }}"
                            class="w-full px-4 py-2 border  @error('mobile') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                        @error('mobile')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                

                <!-- Address Field -->
                <!-- <div class="mb-4">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" placeholder="Your Address" name="address"
                        class="w-full px-4 py-2 border  @error('address') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">{{ old('address') }}</textarea>
                    @error('address')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div> -->

                <!-- Password Field -->
                <div class="flex w-full gap-2">
                    <div class="mb-3 w-6/12">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                        <input id="password" placeholder="Password" type="password" name="password"
                            class="w-full px-4 py-2 border  @error('password') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="mb-4 w-6/12">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input id="password_confirmation" placeholder="Confirm Password" type="password"
                            name="password_confirmation"
                            class="w-full px-4 py-2 border  @error('password_confirmation') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-teal-900 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                        Register
                    </button>
                </div>
            </form>

            <!-- Already Registered Link -->
            <div class="mt-6 text-center flex items-center justify-center">
                <hr class="flex-grow border-t border-teal-900">
                <a href="{{ url('login') }}" class="text-sm text-teal-900 mx-4">Already have an account? Log in</a>
                <hr class="flex-grow border-t border-teal-900">
            </div>

        </div>
    </div>
</div>

@endsection