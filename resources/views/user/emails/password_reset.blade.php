<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div style="background-color: #0d9488; color: white; padding: 20px; text-align: center;">
            <h1 style="margin: 0; font-size: 24px;">🔒 Reset Your Password</h1>
        </div>
        <div style="display: flex; align-items: center; justify-content: center; background-color: #f4f4f9; padding: 20px;">
            <img src="https://dealindia.org/storage/images/setting/1735671088.png" 
                 alt="Welcome Image" 
                 style="width: 20%; height: auto; object-fit: cover;">
        </div>
        
        <div style="padding: 20px;">
            <h2 style="color: #0d9488; text-align: center;">✨ Reset Your Password Below ✨</h2>
            <p>We received a request to reset your password. Click the button below to proceed:</p>

            <div style="text-align: center; margin: 20px 0;">
                <a href="{{ $resetLink }}" 
                   style="font-size: 1.2em; font-weight: bold; text-decoration: none; color: white; background-color: #0d9488; padding: 15px 25px; border-radius: 8px; display: inline-block;">
                   Reset My Password
                </a>
            </div>

            <p>🚨 <strong>Note:</strong> This link will expire in <span style="color: red;">30 minutes</span>. Please do not share it with anyone.</p>

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
