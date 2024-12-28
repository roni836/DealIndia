<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['logos']=Logo::all();
        return view('Admin.setting.manageLogo',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.setting.logoCreate');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'logo_path' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('logo_path');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('logos', $imageName, 'public');

        Logo::create([
            'title' => $data['title'],
            'logo_path' => $imagePath,
        ]);

        return redirect()->route('logos.index')->with('success', 'Logo added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
