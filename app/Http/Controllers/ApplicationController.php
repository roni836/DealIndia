<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function editApplication($id){
        // $data = User::where('id',$id)->first();
        // $user = User::with('investorDetails')->findOrFail($id);
        $user = User::with(['investorDetails.additional_documents'])->findOrFail($id);

        
        return view('Admin.edit-application',["user"=>$user]);
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

        if (!$user){
            return redirect()->back()->with('error', 'User not found');
        }

        // Generate codes
        $user->vr_code = 'VR' . time();
        $user->range_code = 'RG' . time() . rand(10, 99);
        $user->company_code = 'CMP' . strtoupper(uniqid());
        $user->noc_number = 'NOC-' . now()->format('Ymd-His');
        $user->status = 1;
        $user->save();

        // Now the ID is available
        $user->referral_id = 'DI' . str_pad($user->id, 6, '0', STR_PAD_LEFT);
        $user->save();

        // Prepare email details
        // $emailBody = "
        //     Hello {$user->name},

        //     Your Deal India Account has been created successfully! Here are the details:

        //     VR Code: {$user->vr_code}
        //     Range Code: {$user->range_code}
        //     Company Code: {$user->company_code}
        //     NOC Number: {$user->noc_number}
        //     Referral Id : {$user->referral_id}

        //     Thank you for choosing our services!

        //     Regards,
        //     Deal India
        // ";

        // Send email
        // Mail::raw($emailBody, function ($message) use ($user) {
        //     $message->to($user->email)
        //         ->subject('New Deal India Account Created');
        // });

        Mail::send('user.emails.account_created', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Dealindia Account Created');
        });

        return redirect()->back()->with('success', 'User approved successfully!');
    }


    public function rejectApplication(Request $request,$id){
        $user = User::with('investorDetails')->findOrFail($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->status=2;
        $user->save();

        Mail::send('user.emails.application_rejected',['user'=>$user],function($message) use ($user){
            $message->to($user->email)->subject('Application Rejected');
        });

        return redirect()->back()->with('success','User application rejected successfully');

    }

}
