<?php 
namespace App\Http\Controllers;

use App\Models\InvesterDetail;
use App\Models\User;
use App\Models\AdditionalDocument;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InvestorController extends Controller
{

   
    // Display the form
    public function index()
    {
        // Check if the user's details are not complete
        if (Auth::user()->all_details != 1) {
            // Redirect to the form to complete details
            return redirect()->route('details.form');
        }
    
        // Check if admin approval is pending
        if (Auth::user()->status != 1) {
            // Show the approval pending view
            return view('user.approval');
        }
    
        // Show the code form once admin approval is granted
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
            return redirect()->route('dashboard')->with('success', 'Code details added successfully!');
        } else {
            return redirect()->back()->with('error', 'The provided details do not match.');
        }
    }
    public function showForm()
    {

        if(Auth::user()->all_details == 1){
            return redirect()->route('user.investerCodeform');
        }
        $data['logo'] = Setting::first();

        return view('user.details-form',$data);
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'first_name' => 'required|string|max:255',
            // 'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:' . now()->subYears(18)->format('Y-m-d'),
            'gender' => 'required|string',
            'religion' => 'required|string',
            // 'email' => 'required|email|max:255|unique:invester_details',
            // 'mobile' => 'required|string|max:15',
            'bank_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:15|regex:/^[A-Z]{4}0[A-Z0-9]{6}$/',
            'account_holder_name' => 'required|string|max:255',
            'account_type' => 'required|string',
            'street_address' => 'required|string|max:255',
            'landmark' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:6',
            'photo' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'aadhar_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'aadhar_card_number' => 'required|string|size:12',
            'pan_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'pan_card_number' => 'required|string|size:10',
            'pan_card_number' => 'required|string|size:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]$/'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        else {
            $data = $request->except('aadhar_card', 'pan_card', 'inputs');
            $data['aadhar_card'] = $request->file('aadhar_card')?->store('documents/aadhar', 'public');
            $data['pan_card'] = $request->file('pan_card')?->store('documents/pan', 'public');
            $data['photo'] = $request->file('photo')?->store('documents/photo', 'public');
            $data['user_id'] = Auth::id();
    
            $investerDetails = InvesterDetail::create($data);
    
            if ($investerDetails && $request->has('inputs')) {
                foreach ($request->inputs as $input) {
                    $filename = $input['filename']?->store('documents/', 'public');
                    $investerDetails->additional_documents()->create([
                        'user_id' => Auth::id(),
                        'name' => $input['name'],
                        'filename' => $filename,
                    ]);
                }
            }

            if ($investerDetails) {
                User::where('id', Auth::id())->update(['all_details' => 1]);
                Mail::send('user.emails.investor_created', ['first_name' => $investerDetails->first_name], function ($message) use ($request) {
                    $message->to($request->email)
                        ->subject('New Dealindia Investor Request Submitted');
                });
            }
    
            return redirect('/investerform')->with('success', 'Details submitted successfully!');
        }
        return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
    }
    

    }

