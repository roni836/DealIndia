<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Console\Application;
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


    // public function rejectApplication(Request $request,$id){
    //     $user = User::with('investorDetails')->findOrFail($id);
    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found');
    //     }
    //     $user->status=2;
    //     $user->save();

    //     Mail::send('user.emails.application_rejected',['user'=>$user],function($message) use ($user){
    //         $message->to($user->email)->subject('Application Rejected');
    //     });

    //     return redirect()->back()->with('success','User application rejected successfully');

    // }

//     public function rejectApplication(Request $request, $id)
// {
//     $request->validate([
//         'reason' => 'required|string|max:255',
//     ]);

//     $user = User::with(['investorDetails.additional_documents'])->findOrFail($id);

//     if (!$user) {
//         return response()->json(['error' => 'User not found'], 404);
//     }

//     $reason = $request->reason;
//     $name = $user->first_name . ' ' . $user->last_name;
//     $email = $user->email;
//     $mobile = $user->mobile;
//     $application_no = $user->id;

//     // Delete additional documents
//     $investorDetails = $user->investorDetails;
//     $additionalDocuments = $investorDetails?->additional_documents;

//     if ($additionalDocuments) {
//         foreach ($additionalDocuments as $document) {
//             if (file_exists(public_path('storage/' . $document->filename))) {
//                 unlink(public_path('storage/' . $document->filename));
//             }
//             $document->delete();
//         }
//     }

//     // Delete investor details
//     if ($investorDetails) {
//         if (file_exists(public_path('storage/' . $investorDetails->aadhar_card))) {
//             unlink(public_path('storage/' . $investorDetails->aadhar_card));
//         }

//         if (file_exists(public_path('storage/' . $investorDetails->pan_card))) {
//             unlink(public_path('storage/' . $investorDetails->pan_card));
//         }

//         if (file_exists(public_path('storage/' . $investorDetails->photo))) {
//             unlink(public_path('storage/' . $investorDetails->photo));
//         }

//         $investorDetails->delete();
//     }

//     // Send email to the user
//     Mail::send(
//         'user.emails.application_rejected',
//         compact('name', 'reason'),
//         function ($message) use ($email) {
//             $message->to($email)->subject('Application Rejected');
//         }
//     );

//     // Send email to admin
//     $adminEmail = 'shuruchi0508@gmail.com';
//     Mail::send(
//         'user.emails.application_rejected_admin',
//         compact('name', 'reason', 'application_no', 'email', 'mobile'),
//         function ($message) use ($adminEmail) {
//             $message->to($adminEmail)->subject('Application Rejected Notification');
//         }
//     );

//     // Delete the user
//     $user->delete();

//     return response()->json(['message' => 'User application rejected successfully']);
// }
public function rejectApplication(Request $request, $id)
{
    try {
        $request->validate([
            'reason' => 'required|string|max:255',
        ]);

        // Find the user
        $user = User::with(['investorDetails.additional_documents'])->findOrFail($id);
        
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $investorDetails = $user->investorDetails;
        $additionalDocuments = $investorDetails ? $investorDetails->additional_documents : [];

        // Delete associated documents
        if ($additionalDocuments) {
            foreach ($additionalDocuments as $document) {
                if (file_exists(public_path('storage/' . $document->filename))) {
                    unlink(public_path('storage/' . $document->filename));
                }
                $document->delete();
            }
        }

        // Delete the other files (Aadhar, Pan, Photo)
        if ($investorDetails) {
            if (file_exists(public_path('storage/' . $investorDetails->aadhar_card))) {
                unlink(public_path('storage/' . $investorDetails->aadhar_card));
            }

            if (file_exists(public_path('storage/' . $investorDetails->pan_card))) {
                unlink(public_path('storage/' . $investorDetails->pan_card));
            }

            if (file_exists(public_path('storage/' . $investorDetails->photo))) {
                unlink(public_path('storage/' . $investorDetails->photo));
            }

            $investorDetails->delete();
        }

        // Send rejection emails
        $reason = $request->reason;
        $name = $user->first_name . ' ' . $user->last_name;
        $email = $user->email;
        $mobile = $user->mobile;
        $application_no = $user->id;
        //user mail
        Mail::send('user.emails.application_rejected', compact('name', 'reason', 'user'), function($message) use ($email) {
            $message->to($email)->subject('Application Rejected');
        });
        
        // Send email to admin
        $adminEmail = 'support@dealindia.org'; 
        Mail::send('user.emails.application_rejected_admin', compact('name', 'reason', 'application_no', 'email', 'mobile', 'user'), function($message) use ($adminEmail) {
            $message->to($adminEmail)->subject('Application Rejected Notification');
        });
        // Delete the user
        $user->delete();

        
        session()->flash('message', 'Application rejected successfully');
        return response()->json(['message' => 'Application rejected successfully']);

    } catch (\Exception $e) {
        // Log the error to the Laravel logs for debugging
        \Log::error('Error rejecting application: ' . $e->getMessage());
        
        // Return a JSON response with the error message
        return response()->json(['error' => 'Something went wrong, please try again later.'], 500);
    }
}



}
