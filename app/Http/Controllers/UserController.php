<?php

namespace App\Http\Controllers;

use App\Models\AdditionalDocument;
use App\Models\InvesterDetail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as Validator;

class UserController extends Controller
{
    public function home()
    {
        $data['logo'] = Setting::first();
        return view('user.home', $data);
    }

    // public function contact()
    // {
    //     $data['logo'] = Setting::first();
    //     return view('user.contact', $data);
    // }

    public function about()
    {
        $data['logo'] = Setting::first();
        return view('user.about', $data);
    }

    public function services()
    {
        $data['logo'] = Setting::first();
        return view('user.services', $data);
    }

    public function privacyPolicy()
    {
        $data['logo'] = Setting::first();
        return view('user.privacyPolicy', $data);
    }

    public function termsOfService()
    {
        $data['logo'] = Setting::first();
        return view('user.termsOfService', $data);
    }


    public function dashboard()
    {
        $data['logo'] = Setting::first();
        if (Auth::user()->status != 1) {
            if (Auth::user()->vr_code != NULL) {
                    return view('user.approval');
            }
            return redirect()->route('user.investerCodeform');
        } else {
            
                return view('user.dashboard', $data);
        }
    }
    public function member()
    {

        return view('user.member');
    }


    public function showForm(){
        return view('user.additionalDocument');
    }
    public function uploadAdditionalDocument(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'filename' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        $investerDetail = Auth::user()->investorDetails; 

    if (!$investerDetail) {
        return back()->with('error', 'No investor details found.');
    }
        $path = $request->file('filename')->store('documents/', 'public');
    
        AdditionalDocument::create([
            'user_id' => Auth::id(),
            'invester_detail_id' => $investerDetail->id,
            'name' => $request->input('name'),
            'filename' => $path,
        ]);
        
    
        return back()->with('success', 'Document uploaded successfully.');
    }
    
    public function personalInvestorDetails($id)
    {
        $data['logo'] = Setting::first();
        $user = auth()->user();

        $investor = InvesterDetail::where('user_id', $user->id)->first();
        if (!$investor) {
            return redirect()->route('details.submit');
        }

        $additionalDocuments = $investor->additional_documents;

        $data['investor'] = $investor;
        $data['additionalDocuments'] = $additionalDocuments;

        return view('user.personalDetails', $data);
    }



   
}
