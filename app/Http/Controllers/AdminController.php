<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;



class AdminController extends Controller
{
   //   use Analytics;

   public function getVisitorsData()
   {
      // Fetch data for the past 7 days
      $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

      // Process data for the graph
      //  $dates = [];
      $pageViews = [];
      $visitors = [];

      foreach ($analyticsData as $data) {
         //   $dates[] = $data['date']->format('Y-m-d'); // Extract the date
         $pageViews[] = $data['screenPageViews'];         // Extract page views
         $visitors[] = $data['activeUsers'];           // Extract visitors count
      }

      return view('analytics.visitors', compact('pageViews', 'visitors'));
   }

   // public function dashboard()
   // {
   //    $data['recent_applications'] = User::where('isAdmin', 0)->where('status', 0)->where('code_details', 0)->with('investorDetails')->take(2)->get();
   //    $data['approved_applications'] = User::where('isAdmin', 0)->where('status', 1)->where('code_details', 1)->with('investorDetails')->take(2)->get();

   //    $data['total_pending'] = User::where('isAdmin', 0)->where('status', 0)->count();
   //    $data['total_approved'] = User::where('isAdmin', 0)->where('status', 1)->where('code_details', 1)->count();
   //    $data['total_active'] = User::where('isAdmin', 0)->where('all_details', 1)->where('code_details', 1)->where('status', 1)->count();
   //    $data['total_application'] = User::where('isAdmin', 0)->count();
   //    $data['analyticsData'] = Analytics::fetchVisitorsAndPageViews(Period::days(7));

   //    return view('Admin.dashboard', $data);
   // }



   public function dashboard()
   {
      $data['recent_applications'] = User::where('isAdmin', 0)
         ->where('status', 0)
         ->where('code_details', 0)
         ->with('investorDetails')
         ->take(2)
         ->get();

      $data['approved_applications'] = User::where('isAdmin', 0)
         ->where('status', 1)
         ->where('code_details', 1)
         ->with('investorDetails')
         ->take(2)
         ->get();

      $data['total_pending'] = User::where('isAdmin', 0)->where('status', 0)->count();
      $data['total_approved'] = User::where('isAdmin', 0)->where('status', 1)->where('code_details', 1)->count();
      $data['total_active'] = User::where('isAdmin', 0)
         ->where('all_details', 1)
         ->where('code_details', 1)
         ->where('status', 1)
         ->count();
      $data['total_application'] = User::where('isAdmin', 0)->count();

      // Analytics data for the last 7 days
      $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

      $data['pageViews'] = [];
      $data['visitors'] = [];

      foreach ($analyticsData as $item) {

         $data['pageViews'][] = $item['screenPageViews']; // Page Views
         $data['visitors'][] = $item['activeUsers'];      // Visitors
      }

      return view('Admin.dashboard', $data);
   }

   public function applications()
   {
      $applications = User::with('investorDetails')->get();
      return view('Admin.applications', ["applications" => $applications]);
   }

   public function approvedApplication()
   {

      $applications = User::where('status', 1)->where('isAdmin', 0)->with('investorDetails')->get();

      return view('Admin.approved-applications', ["applications" => $applications]);
   }


   public function pendingApplication()
   {
      $applications = User::where('status', 0)->where('isAdmin', 0)->with('investorDetails')->get();
      return view('Admin.applications', ["applications" => $applications]);
   }

   // public function showRejectedApplications()
   // {
   //    $rejectedApplications = User::where('status', 2)->with('investorDetails')->get();

   //    return view('Admin.rejected-applications', compact('rejectedApplications'));
   // }
   public function contact()
   {
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
      return redirect()->route('admin.contact.manage', $contact)->with('success', 'Contact message updated successfully');
   }


   public function logout()
   {
      Auth::logout();
      return redirect('/'); // Redirect to the desired page after logout
   }
}
