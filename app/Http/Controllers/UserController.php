<?php

namespace App\Http\Controllers;

use App\Models\InvesterDetail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $data['logo'] = Setting::first();
        return view('user.home', $data);
    }

    public function contact()
    {
        $data['logo'] = Setting::first();
        return view('user.contact', $data);
    }

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
        if(Auth::user()->code_details != 1){
            return redirect()->route('user.investerCodeform');
        }
        else{
            return view('user.dashboard',$data);
        }
    
    }
    public function member()
    {
       
        return view('user.member');
    }
    public function personalInvestorDetails($id)
    {
        $data['logo'] = Setting::first();
        $user = auth()->user();

        $investor = InvesterDetail::where('user_id', $user->id)->first();
        if (!$investor) {
            return redirect()->route('details.submit');
        }

        $data['investor'] = $investor;
        return view('user.personalDetails', $data);
    }

   
}
