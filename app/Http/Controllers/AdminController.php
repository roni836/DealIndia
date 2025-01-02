<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function dashboard(){
      $data['recent_applications'] = User::where('isAdmin',0)->where('status', 0)->where('code_details',0)->with('investorDetails')->take(2)->get();
      $data['approved_applications'] = User::where('isAdmin',0)->where('status', 1)->where('code_details',1)->with('investorDetails')->take(2)->get();
      
      $data['total_pending'] = User::where('isAdmin',0)->where('status', 0)->where('code_details',1)->count();
      $data['total_approved'] = User::where('isAdmin',0)->where('status',1)->where('code_details',1)->count();
      $data['total_active'] = User::where('isAdmin',0)->where('all_details',1)->where('code_details',1)->where('status',1)->count();
      $data['total_application'] = User::where('isAdmin',0)->count();
      return view('Admin.dashboard',$data);
   }

   public function applications(){
      $applications = User::with('investorDetails')->get();
      return view('Admin.applications',["applications" => $applications]);
   }

   public function approvedApplication(){
     
      $applications = User::where('status', 1)->where('isAdmin',0)->with('investorDetails')->get();
      return view('Admin.approved-applications', ["applications" => $applications]);
  }
   

   public function pendingApplication(){
      $applications = User::where('status', 0)->where('isAdmin',0)->with('investorDetails')->get();
      return view('Admin.applications',["applications"=>$applications]);
   }

   public function contact(){
      $data['contacts'] = Contact::paginate(10);
      return view('Admin.contact', $data);
   }

   public function editContact(Contact $contact)
   {
       return view('Admin.manage_contact', compact('contact'));
   }

   public function updateContact(Request $request, Contact $contact)
   {
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
            'email' => 'required|email',
           'status' => 'required|string', 
       ]);
       $contact->update($validatedData);
       return redirect()->route('admin.contact.manage', $contact)->with('success', 'Contact Message updated successfully');
   } 


   public function logout()
   {
       Auth::logout();
       return redirect('/'); // Redirect to the desired page after logout
   }

}
