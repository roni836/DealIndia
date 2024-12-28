<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function editApplication($id){
        $data = User::where('id',$id)->first();
        return view('Admin.edit-application',["user"=>$data]);
    }
}
