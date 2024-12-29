<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function dashboard(){
    return view('Admin.dashboard');
   }

   public function applications(){
    return view('Admin.applications');
   }

   public function approvedApplication(){
      $applications = User::where('status',1)->get();
      return view('Admin.approved-applications',["applications"=>$applications]);
   }

   public function pendingApplication(){
      $applications = User::where('status',0)->get();
      return view('Admin.applications',["applications"=>$applications]);
   }
   public function logout()
   {
       Auth::logout();
       return redirect('/'); // Redirect to the desired page after logout
   }
}
