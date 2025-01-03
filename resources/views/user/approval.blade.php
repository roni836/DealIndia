@extends('user.userBase')
@section('title', 'User Dashboard')
@section('content')
   <!-- Static Page -->
   <div class="min-h-screen flex items-start  justify-start bg-gradient-to-br from-green-50 to-green-100">
    <div class="bg-green-100 p-10 my-20 rounded-sm shadow-xl max-w-4xl text-left mx-auto">
       
        <h2 class="text-4xl font-extrabold text-gray-800 mb-4">
             Admin Approval Required!
        </h2>
        <p class="text-gray-600 text-lg mb-6">
            Your account setup is not yet complete. Here’s what to expect during the process:
        </p>
        <div class="text-left bg-green-50 border-l-4 border-green-400 p-4 rounded-lg mb-6">
            <h3 class="text-green-700 font-bold mb-2">📋 Steps to Complete Your Account:</h3>
            <ul class="list-decimal list-inside text-green-700 text-sm leading-relaxed space-y-2">
                <li>Admin will review and approve your investor details.</li>
                <li>After approval, you will receive an email titled: 
                    <span class="font-semibold text-green-800">"Your Deal India Account has been created successfully!"</span>
                </li>
                <li>The email will contain:
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Your <strong>VR Code</strong></li>
                        <li>Your <strong>Range Code</strong></li>
                        <li>Your <strong>Company Code</strong></li>
                        <li>Your <strong>NOC Number</strong></li>
                    </ul>
                </li>
                <li>Refresh this page to access the form once approved.</li>
                <li>Fill in the form with the provided details.</li>
                <li>Submit the form to unlock access to your dashboard. 🚀</li>
            </ul>
        </div>
        <div class="text-left bg-gray-50 border-l-4 border-rose-400 p-4 rounded-lg mb-6">
            <h3 class="text-gray-700 font-bold mb-2">ℹ️ Important Information:</h3>
            <ul class="list-disc list-inside text-gray-600 text-sm leading-relaxed space-y-2">
                <li>Approval may take up to <strong>24-48 hours</strong>.</li>
                <li>Ensure your contact information is up-to-date to avoid delays.</li>
                <li>If you face any issues, use the support option below.</li>
            </ul>
        </div>
        <p class="text-gray-600 mb-6">
            Need help? Contact us to resolve your queries promptly.
        </p>
        <a href="mailto:support@dealindia.org"
        class="inline-block text-center w-full bg-teal-600 text-white py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none ">
        📧 Contact Support
     </a>
    </div>
</div>


@endsection
