<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminMasterController extends Controller
{
    public function AdminMaster(){

        return view('admin.layout.master');
    }

    
   public function login(){
        
        return view('admin.layout.AdminSignin');
    }
   /* public function creatuser(){

        return \view('admin.layout.AdminSignin');
    }*/

  

    public function tryLogin(Request $request){
        $IsLoged=Auth::attempt(['email'=>$request->UserEmail,'password'=>$request->UserPass]);
        if($IsLoged)
            {
                $user=User::find(Auth::user()->id);
                if($user->hasRole("Admin"))
                return redirect()->route("admindash");
                else {
                    return redirect()->route("clientHome");
                }
            }
        return redirect()->back()->with(['message'=>'incorect user name or password']);

        
        
        
    }
}
