<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contacts']=Contact::all();
        return view('Admin.contact',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['logo'] = Setting::first();
        return view('user.contact', $data);
    }
   

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|in:inquire,support,feedback,other', 
        'phone_number' => 'required|string|max:15',
        'message' => 'required|string',
    ]);

    // Save contact
    Contact::create($request->all());

    return redirect()->back()->with('success', 'Your message has been sent!');
}


    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
