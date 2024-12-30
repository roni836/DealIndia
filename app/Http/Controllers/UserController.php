<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

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
}
