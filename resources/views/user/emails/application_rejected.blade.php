<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Rejected</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; color: #333;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h1 style="font-size: 24px; color: #f44336;">📩 Application Rejected</h1>
        
        <p style="font-size: 16px; line-height: 1.6;">
            👤 <strong>Dear {{ $user->first_name }}</strong>,
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            We regret to inform you that your application has been rejected.
        </p>
        
        <p style="font-size: 16px; line-height: 1.6;">
            If you have any questions or require further clarification, please feel free to reach out to our support team at 
            <a href="mailto:support@dealindia.com" style="color: #1a73e8;">support@dealindia.com</a>.
        </p>
        
        <div style="background-color: #f4f4f4; padding: 15px; border-radius: 8px; margin-top: 20px; color: #555;">
            <p style="margin: 0;">📞 <strong>Need Help?</strong> Contact our support team for assistance.</p>
        </div>
        
        <p style="font-size: 14px; color: #777; margin-top: 20px;">
            Thank you for your interest in our services. We appreciate the time and effort you put into your application.
        </p>
    
        <p style="font-size: 14px; color: #555; line-height: 1.8;">
            Regards,<br>
            <strong>Deal India Team</strong>
        </p>
    
        <p style="font-size: 12px; color: #888; margin-top: 20px; text-align: center;">
            &copy; {{ date('Y') }} Deal India. All rights reserved.
        </p>
    </div>

</body>
</html>
