@extends('user.userBase')
@section('title', 'Forgot Password Work')
@section('content')
<div class="container mt-10 mx-auto p-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-teal-600 text-white text-center py-4 rounded-t-lg">
                    <h3 class="text-xl font-semibold">{{ __('Forgot Your Password?') }}</h3>
                </div>

                <div class="p-6">
                    @if(session('status'))
                        <div class="bg-green-100 text-green-800 border border-green-300 rounded-md p-4 mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 text-red-800 border border-red-300 rounded-md p-4 mb-4">
                            <ul>
                                <li>{{ session('error') }}</li>
                            </ul>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 text-red-800 border border-red-300 rounded-md p-4 mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- VR Code Input (New) -->
                        <div class="mb-4">
                            <label for="vr_code" class="block text-sm font-medium text-gray-700">{{ __('Verification Code') }}</label>
                            <input type="text" id="vr_code" name="vr_code" placeholder="Enter Verification Code" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('vr_code') border-red-500 @enderror" value="{{ old('vr_code') }}" required>
                            @error('vr_code')
                                <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="w-full py-3 px-4 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
