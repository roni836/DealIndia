@extends('user.userBase')
@section('title', 'Login Work')
@section('content')
    <div class="flex w-full flex-col lg:flex-row mt-10 md:mt-4 overflow-hidden">
        <!-- Left Section (Image) -->
        <div class="w-full md:w-6/12 hidden md:flex">
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
        <div class="w-full lg:w-6/12  flex flex-1 items-center">
            <!-- Display Validation Errors -->

            <div class="w-full mx-6 lg:mx-12 md:p-8 p-3">
                <h2 class="text-4xl font-semibold text-center text-gray-800 mb-6"
                    style="font-family: 'Roboto Condensed', serif;">Become a member</h2>
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


                {{-- @if (session('success'))
                    <form method="POST" action="{{ route('user.register.verify') }}">
                        @csrf
                        <input type="text" name="email" value="{{ old('email', session('email')) }}">

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
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
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
                @else --}}
                    <form method="POST" action="{{ route('user.register') }}">
                        @csrf

                        <!-- Name Field -->
                        <div class="flex flex-col md:flex-col gap-4">
                            <!-- First Name Field -->
                            <div class=" mb-4">
                                <label for="first_name" class="block text-sm font-medium mb-2 text-gray-700">First
                                    Name</label>
                                <input id="first_name" type="text" placeholder="Your First Name" name="first_name"
                                    value="{{ old('first_name') }}"
                                    class="w-full px-4 py-2 border @error('first_name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                                @error('first_name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Last Name Field -->
                            <div class=" mb-4">
                                <label for="last_name" class="block text-sm font-medium mb-2 text-gray-700">Last
                                    Name</label>
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
                            <input id="email" type="email" placeholder="Your E-Mail" name="email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror  rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="mobile" class="block mb-2 text-sm font-medium text-gray-700">Contact No.</label>
                            <input id="mobile" placeholder="9123456789" type="tel" name="mobile"
                                value="{{ old('mobile') }}"
                                class="w-full px-4 py-2 border  @error('mobile') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                            @error('mobile')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="referral_id" class="block mb-2 text-sm font-medium text-gray-700">Referral id
                                (Optional)</label>
                            <input id="parent_id" placeholder="Referral id" type="text" name="parent_id"
                                value="{{ old('parent_id') }}"
                                class="w-full px-4 py-2 border  @error('parent_id') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm">
                            @error('parent_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="referral_id" class="block mb-2 text-sm font-medium text-gray-700">Referred By
                                (Optional)</label>
                            <input id="referred_by" placeholder="Referred By" type="text" name="referred_by"
                                value="" class="w-full px-4 py-2 border  border-gray-300 rounded-md shadow-sm"
                                readonly>
                        </div>



                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full bg-teal-900 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                                Register
                            </button>
                        </div>
                    </form>
                {{-- @endif --}}


                {{-- <form action="Post" action="{{route('user.register.verify')}}">

                    <div class="mb-4">
                        <label for="otp" class="block mb-2 text-sm font-medium text-gray-700">Enter the Otp</label>
                        <input id="otp" placeholder="" type="number" name="otp" value=""
                            class="w-full px-4 py-2 border  border-gray-300 rounded-md shadow-sm" readonly>
                    </div>

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
                </form> --}}

                <!-- Already Registered Link -->
                <div class="mt-6 text-center flex items-center justify-center mb-">
                    <hr class="flex-grow border-t border-teal-900">
                    <a href="{{ url('login') }}" class="text-sm text-teal-900 mx-1">Already have an account? Log in</a>
                    {{-- <a href="{{ route('password.request') }}" class="text-sm text-teal-900 mx-1">Forgot Password</a> --}}
                    <hr class="flex-grow border-t border-teal-900">
                </div>

            </div>
        </div>
    </div>










    <script>
        document.getElementById('parent_id').addEventListener('input', function() {
            const parentId = this.value;

            if (parentId) {
                fetch(`/get-referred-user/${parentId}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched Data:', data);
                        if (data.name) {
                            document.getElementById('referred_by').value = data.name;
                        } else {
                            document.getElementById('referred_by').value = 'No member found';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching referred user:', error);
                        document.getElementById('referred_by').value = 'Error retrieving data';
                    });
            } else {
                document.getElementById('referred_by').value = '';
            }
        });
    </script>

@endsection
