<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function editApplication($id){
        $data = User::where('id',$id)->first();
        return view('Admin.edit-application',["user"=>$data]);
    }

    // public function generateCode($id){
    //     $user = User::find($id);

    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found');
    //     }

    //     $user->vr_code = 'VR' . time();
    //     $user->range_code = 'RG' . time() . rand(10, 99);
    //     $user->company_code = 'CMP' . strtoupper(uniqid());
    //     $user->noc_number = 'NOC-' . now()->format('Ymd-His');
    //     $user->save();

    //     Mail::raw("Hello $request->name, your Real Account has been Created Successfully.", function ($message) use ($request) {
    //         $message->to($request->email)
    //             ->subject('New Real Account Created');
    //     });

    //     return redirect()->back()->with('success', 'User approved successfully!');
    // }

    public function generateCode($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Generate codes
        $user->vr_code = 'VR' . time();
        $user->range_code = 'RG' . time() . rand(10, 99);
        $user->company_code = 'CMP' . strtoupper(uniqid());
        $user->noc_number = 'NOC-' . now()->format('Ymd-His');
        $user->save();

        // Prepare email details
        $emailBody = "
            Hello {$user->name},

            Your Real Account has been created successfully! Here are the details:

            VR Code: {$user->vr_code}
            Range Code: {$user->range_code}
            Company Code: {$user->company_code}
            NOC Number: {$user->noc_number}

            Thank you for choosing our services!

            Regards,
            [Your Company Name]
        ";

        // Send email
        Mail::raw($emailBody, function ($message) use ($user) {
            $message->to($user->email)
                ->subject('New Real Account Created');
        });

        return redirect()->back()->with('success', 'User approved successfully!');
    }

}
