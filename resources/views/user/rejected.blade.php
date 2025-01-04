@extends('user.userBase')
@section('title', 'Application Rejected')
@section('content')
<!-- Rejected Application Page -->
<div class=" mt-10 py-10 px-4 flex items-center justify-center bg-gradient-to-br from-gray-50 to-red-100">
    <div class="bg-white shadow-xl rounded-lg p-10 max-w-3xl mx-auto ">
        <h2 class="text-3xl font-extrabold text-red-600 mb-4 text-center">
            🚫 Application Rejected
        </h2>
        <p class="text-gray-700 text-md md:text-lg mb-6 text-center">
            Unfortunately, your application has been rejected. Please review the next steps and resources below to address this issue.
        </p>

        <div class="bg-red-50 border-l-4 border-red-400 p-5 rounded-lg mb-6">
            <h3 class="text-red-700 font-bold mb-3">🔍 Reason for Rejection</h3>
            <p class="text-sm text-red-600">
                The rejection might be due to incomplete or incorrect information submitted during the application process.
            </p>
        </div>

        <div class="bg-gray-50 border-l-4 border-gray-400 p-5 rounded-lg mb-6">
            <h3 class="text-gray-800 font-bold mb-3">📋 What to Do Next</h3>
            <ul class="list-decimal list-inside text-gray-700 text-sm leading-relaxed space-y-2">
                <li>Review the details of your application for accuracy.</li>
                <li>Ensure all required fields and documents are correctly filled out.</li>
                <li>Contact support for clarification on the rejection reason.</li>
                <li>Submit a revised application with the correct information.</li>
            </ul>
        </div>

        <div class="bg-blue-50 border-l-4 border-blue-400 p-5 rounded-lg mb-6">
            <h3 class="text-blue-700 font-bold mb-3">📧 Need Assistance?</h3>
            <p class="text-sm text-gray-600">
                If you have questions or need further assistance, don’t hesitate to reach out to us. We’re here to help!
            </p>
            <a href="mailto:support@dealindia.org"
                class="block mt-4 text-center bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700">
                📧 Contact Support
            </a>
        </div>

        <div class="text-center">
            <a href="{{ route('homepage') }}"
                class="inline-block  text-gray-700 underline text-sm hover:text-gray-900">
                ← Return to Home
            </a>
        </div>
    </div>
</div>
@endsection
