<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Your OTP for Login</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg max-w-md">
        <h2 class="text-2xl font-bold text-gray-800">Your OTP for Login</h2>
        <p class="text-gray-700 mt-4">Hello,</p>
        <p class="text-gray-700">We received a request to log in to your account. Use the following OTP to complete the process:</p>

        <!-- Highlighted OTP -->
        <p class="text-4xl font-semibold text-center bg-blue-500 text-white p-4 rounded-lg mt-6">
            {{ $otp }}
        </p>

        <p class="text-gray-700 mt-6">If you did not request this, please ignore this email or contact us at 
            <span class="text-blue-600 font-bold">support@example.com</span>.
        </p>

        <div class="footer text-center text-xs text-gray-500 mt-6">
            <p>&copy; {{ date('Y') }} Deal India. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
