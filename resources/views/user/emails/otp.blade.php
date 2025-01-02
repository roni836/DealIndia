<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP for Login</title>
</head>

<body>
    <div>
        <h2>Your OTP for Login</h2>
        <p>Hello,</p>
        <p>We received a request to log in to your account. Use the following OTP to complete the process:</p>

        <p style="font-size: 2em; font-weight: bold; text-align: center; background-color: #3498db; color: white; padding: 10px; border-radius: 5px;">
            {{ $otp }}
        </p>

        <p>If you did not request this, please ignore this email or contact us at 
            <a href="mailto:support@example.com">support@example.com</a>.
        </p>

        <div style="text-align: center; font-size: 0.8em; color: #777; margin-top: 20px;">
            <p>&copy; {{ date('Y') }} Deal India. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
