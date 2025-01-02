<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Account Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-lg mx-auto mt-10 bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white py-4 px-6 flex items-center">
            <h1 class="text-xl font-bold flex items-center">
                Welcome to Deal! 🚀
            </h1>
        </div>

        <!-- Hero Image -->
        <div class="bg-gray-100">
            <img src="https://dealindia.org/storage/images/setting/1735671088.png" alt="Welcome Image" width="20%" height="20%" class="w-full object-cover">
        </div>

        <!-- Content -->
        <div class="px-6 py-4">
            <h2 class="text-xl font-semibold text-gray-800">Hello {{ $first_name }} 👋,</h2>
            <p class="text-gray-600 mt-2">
                🌟 Congratulations! Your Deal account has been <strong>successfully registered</strong>.
            </p>
            <p class="text-gray-600 mt-2">
                We’re thrilled to have you on board. With your new account, you can:
            </p>
            <ul class="list-disc pl-5 text-gray-600 mt-2">
                <li>💼 Explore amazing deals tailored just for you.</li>
                <li>🎉 Enjoy exclusive discounts and offers.</li>
                <li>📈 Track your activity and manage your preferences.</li>
            </ul>
            <p class="text-gray-600 mt-4">
                Don’t wait! Dive in and start your journey with Deal. Let’s make your experience unforgettable. 🌈
            </p>
            <div class="mt-4">
                <a href="#" class="inline-block bg-blue-600 text-white text-sm font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700">
                    Explore Features 🚀
                </a>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-200"></div>

        <!-- Additional Info -->
        <div class="px-6 py-4">
            <h3 class="text-lg font-semibold text-gray-800">Need Help? 💬</h3>
            <p class="text-gray-600 mt-2">
                If you have any questions or face any issues, feel free to reach out to us at:
                <a href="mailto:support@deal.com" class="text-blue-600 hover:underline">support@deal.com</a>.
            </p>
            <p class="text-gray-600 mt-2">
                We're here to help, 24/7! 🤝
            </p>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 py-4 text-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Deal. All rights reserved. ❤️</p>
        </div>
    </div>
</body>
</html>
