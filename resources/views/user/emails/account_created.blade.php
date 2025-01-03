<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9;">

    <div>
        <h1 style="font-size: 24px; color: #4CAF50;">🎉 Welcome to Dealindia! 🎉</h1>
        
        <p style="font-size: 16px; color: #333; line-height: 1.8;">
            👋 <strong>Hi {{ $user->first_name }}</strong>,
        </p>
        <p style="font-size: 16px; color: #333; line-height: 1.8;">
            🌟 We are beyond excited to welcome you to the Dealindia family! Your account has been successfully created, and you’re now part of a growing community of passionate individuals striving for excellence.
        </p>
        <p style="font-size: 16px; color: #333; line-height: 1.8;">
            🚀 Here's a quick glance at your account details. Feel free to use them to explore everything Dealindia has to offer:
        </p>
        
        <div style="background-color: #f4f4f4; padding: 15px; border-radius: 8px; margin-top: 15px;">
            <p><strong>VR Code:</strong> {{ $user->vr_code }}</p>
            <p><strong>Range Code:</strong> {{ $user->range_code }}</p>
            <p><strong>Company Code:</strong> {{ $user->company_code }}</p>
            <p><strong>NOC Number:</strong> {{ $user->noc_number }}</p>
            <p><strong>Referral ID:</strong> {{ $user->referral_id }}</p>
        </div>
        
        <p style="font-size: 16px; color: #333; line-height: 1.8; margin-top: 20px;">
            💬 If you ever need assistance or have questions, don't hesitate to reach out to our support team. We're here to help every step of the way.
        </p>
    
        <p style="font-size: 14px; color: #777; margin-top: 20px; font-style: italic;">
            ✨ Together, let’s achieve great things. Thank you for trusting Deal India. Let’s begin this amazing journey!
        </p>
    
        <p style="font-size: 12px; color: #888; margin-top: 20px;">
            &copy; {{ date('Y') }} Dealindia. All rights reserved.
        </p>
    </div>
    
</body>
</html>
