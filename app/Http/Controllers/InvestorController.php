<?php 
namespace App\Http\Controllers;

use App\Models\InvesterDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InvestorController extends Controller
{
    // Display the form
    public function index()
    {
        return view('user.codeform');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'vr_code' => 'required|string|max:255',
            'range_code' => 'required|string|max:255',
            'company_code' => 'required|string|max:255',
            'noc_number' => 'required|string|max:255',
        ]);

        // Retrieve the authenticated user's details
        $userId = Auth::id();
        $userDetails = User::find($userId);

        // Check if the submitted codes match the user's details
        if (
            $userDetails->vr_code == $validated['vr_code'] &&
            $userDetails->range_code == $validated['range_code'] &&
            $userDetails->company_code == $validated['company_code'] &&
            $userDetails->noc_number == $validated['noc_number']
        ) {
            // Save details in the InvesterDetail model
           User::find(Auth::id())->update(['code_details' => 1]);
            return redirect()->route('details.form')->with('success', 'Code details added successfully!');
        } else {
            return redirect()->back()->with('error', 'The provided details do not match.');
        }
    }
    public function showForm()
    {
        return view('user.details-form');
    }

    public function submitForm(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'religion' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:15',
            'account_holder_name' => 'required|string|max:255',
            'account_type' => 'required|string',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'aadhar_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'pan_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // Handle file uploads
        $aadharCardPath = $request->hasFile('aadhar_card') 
            ? $request->file('aadhar_card')->store('documents/aadhar', 'public') 
            : null;
        
        $panCardPath = $request->hasFile('pan_card') 
            ? $request->file('pan_card')->store('documents/pan', 'public') 
            : null;
        
        // Insert into the database
        $details = InvesterDetail::create([
            'user_id' => Auth::id(),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'gender' => $request->input('gender'),
            'religion' => $request->input('religion'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'bank_name' => $request->input('bank_name'),
            'account_number' => $request->input('account_number'),
            'ifsc_code' => $request->input('ifsc_code'),
            'account_holder_name' => $request->input('account_holder_name'),
            'account_type' => $request->input('account_type'),
            'street_address' => $request->input('street_address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'postal_code' => $request->input('postal_code'),
            'aadhar_card' => $aadharCardPath,
            'pan_card' => $panCardPath,
        ]);

        if($details){
            $user = User::find(Auth::id());
            $user->all_details = 1;
            $user->save();

            return redirect('/dashboard')->with('success', 'Details submitted successfully!');
        }


       
        

      
    }
    
}
