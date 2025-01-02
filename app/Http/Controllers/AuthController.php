<?php

namespace App\Http\Controllers;

use App\Models\LoginToken;
use App\Models\Logo;
use App\Models\OTP;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            // 'gender' => 'required|string',
            // 'dob' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'parent_id' => 'nullable|string|exists:users,referral_id',
            // 'address' => 'required|string',
            'mobile' => 'required|unique:users,mobile|digits:10|regex:/^[6789][0-9]{9}$/',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'parent_id' => $request->parent_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // if ($data) {
        //     Mail::raw("Hello $request->first_name, your Deal Account has been Registered Successfully.", function ($message) use ($request) {
        //         $message->to($request->email)
        //             ->subject('New Deal Account Created');
        //     });
        //     return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
        // }
        if ($data) {
            Mail::send('user.emails.deal_account', ['first_name' => $request->first_name], function ($message) use ($request) {
                $message->to($request->email)
                    ->subject('Welcome to Deal!');
            });

            return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
        }
    }


    public function sendOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $otp = rand(100000, 999999);

            OTP::updateOrCreate(
                ['email' => $request->email],
                [
                    'otp' => $otp,
                    'expires_at' => Carbon::now()->addMinutes(10),
                ]
            );

            // Send OTP to email
            try {
                Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
                    $message->to($request->email)
                        ->subject('Your OTP for Login');
                });

                return redirect('/verification')->with('success', 'OTP sent successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to send OTP. Please try again.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }


    public function verifyOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $otpRecord = OTP::where('email', $request->email)->first();

        if (!$otpRecord || $otpRecord->otp !== $request->otp) {
            return redirect()->back()->with('error', 'Invalid OTP.');
        }

        if (Carbon::now()->greaterThan($otpRecord->expires_at)) {
            return redirect()->back()->with('error', 'OTP has expired.');
        }

        $otpRecord->delete();

        $user = User::where('email', $request->email)->first();

        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Login successful.');
        }
        return redirect()->back()->with('error', 'Failed to log in.');
    }

    public function sendLoginLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        // Generate a secure token
        $token = Str::random(64);

        // Store the token using the model
        LoginToken::updateOrCreate(
            ['email' => $user->email],
            [
                'token' => $token,
                'expires_at' => now()->addMinutes(10),
            ]
        );

        // Send the login link via email
        $loginLink = url('/login/link?token=' . $token . '&email=' . $user->email);
        try {
            Mail::raw("Click the link to log in: $loginLink", function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Your Login Link');
            });

            return redirect()->back()->with('success', 'Login link sent to your email.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send login link. Please try again.');
        }
    }

    public function logout()
    {
        Auth::logout(); // Logs out the current user
        request()->session()->invalidate(); // Invalidates the session
        request()->session()->regenerateToken(); // Regenerates the CSRF token

        return redirect('/login')->with('success', 'You have been logged out.');
    }

    public function loginViaLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator);
        }

        $loginToken = LoginToken::where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$loginToken || $loginToken->isExpired()) {
            return redirect('/login')->with('error', 'Invalid or expired login link.');
        }

        // Log in the user and remove the token
        $user = User::where('email', $request->email)->first();
        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();

            // Delete the token after successful login
            $loginToken->delete();

            return redirect('/dashboard')->with('success', 'Login successful.');
        }

        return redirect('/login')->with('error', 'Login failed.');
    }
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) { 
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();
        $token = Str::random(64);
        $vr_code = Str::random(6);  // Generate a 6-character verification code

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $user->email],
            [
                'token' => Hash::make($token),
                'vr_code' => $vr_code,
                'created_at' => Carbon::now(),
            ]
        );

        // Send the password reset link with token and vr_code
        $resetLink = url('/reset-password/' . $token . '?email=' . $user->email . '&vr_code=' . $vr_code);

        try {
            Mail::raw("Click here to reset your password: $resetLink", function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Password Reset Link');
            });

            return redirect()->route('password.request')->with('success', 'Password reset link sent to your email.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send password reset link. Please try again.');
        }
    }

    // Show password reset form
    public function showResetPasswordForm(Request $request, $token)
    {
        return view('auth.reset-password', [
            'token' => $token,
            'email' => $request->email,
            'vr_code' => $request->vr_code,
        ]);
    }

    // Reset password
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'vr_code' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $resetRecord = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        // Check if the token and vr_code are valid
        if (!$resetRecord || !Hash::check($request->token, $resetRecord->token) || $resetRecord->vr_code !== $request->vr_code) {
            return redirect()->route('password.request')->with('error', 'Invalid or expired token or verification code.');
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Your password has been reset successfully.');
    }
}
