<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP for Login</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div style="background-color: #0d9488; color: white; padding: 20px; text-align: center;">
            <h1 style="margin: 0; font-size: 24px;">🔒 Secure Your Login</h1>
        </div>
        <div style="display: flex; align-items: center; justify-content: center; background-color: #f4f4f9; padding: 20px;">
            <img src="https://dealindia.org/storage/images/setting/1735671088.png" 
                 alt="Welcome Image" 
                 style="width: 20%; height: auto; object-fit: cover;">
        </div>
        
        <div style="padding: 20px;">
            <h2 style="color: #0d9488; text-align: center;">✨ Your OTP is Here! ✨</h2>
            <p>We noticed a login attempt for your account. Use the <strong>One-Time Password (OTP)</strong> below to proceed:</p>

            <p style="font-size: 2em; font-weight: bold; text-align: center; background-color: #0d9488; color: white; padding: 15px; border-radius: 8px; width: 50%; margin: 20px auto;">
                {{ $otp }}
            </p>

            <p>🚨 <strong>Important:</strong> This OTP will expire in <span style="color: red;">10 minutes</span>. Please do not share it with anyone.</p>

            <p>If you did not request this, ignore this email or contact us immediately at 
                <a href="mailto:support@dealindia.org" style="color: #0d9488; text-decoration: none;">support@dealindia.org</a>.
            </p>
        </div>

        <div style="text-align: center; background-color: #f4f4f9; padding: 10px 20px; font-size: 0.9em; color: #555;">
            <p>&copy; {{ date('Y') }} <strong>Dealindia</strong>. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
