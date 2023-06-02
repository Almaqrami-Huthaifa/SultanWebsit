<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminMasterController extends Controller
{
    public function AdminMaster(){

        return view('admin.layout.master');
    }

    
    public function login(){
        return view('admin.layout.AdminSignin');
    }

    public function tryLogin(Request $request){
        $IsLoged=Auth::attempt(['email'=>$request->UserEmail,'password'=>$request->UserPass]);
        if($IsLoged)
        return redirect()->route("admindash");
        return redirect()->back()->with(['message'=>'incorect user name or password']);

        
        
        
    }
}
