@extends('user.userBase')
@section('title', 'Reset Password')
@section('content')

<div class="container mt-10 mx-auto py-8 px-4">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Reset Your Password</h2>

        @if(session('status'))
            <div class="alert alert-success bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" value="{{ $email ?? old('email') }}" required autofocus>
            </div> 
            {{-- <div class="mb-4">
                <label for="vr_code" class="block text-sm font-semibold text-gray-700">Vr code</label>
                <input type="text" id="vr_code" name="vr_code" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" value="{{ $vr_code ?? old('vr_code') }}" required autofocus>
            </div> --}}

            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-700">New Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">Confirm New Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full py-3 bg-teal-600 text-white font-semibold text-lg rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    Reset Password
                </button>
            </div>

        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-teal-600 hover:text-teal-800 text-sm">Remembered your password? Login here.</a>
        </div>
    </div>
</div>

@endsection
