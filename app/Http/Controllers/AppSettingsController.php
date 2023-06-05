<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AppSettingsController extends Controller
{
    public function generateRoles(){
        //Auth::user()->hasRole("Admin")
        /*$roles=Role::get();
        if($roles->count()==0){            
            $admin=new Role();
            $admin->name='Admin';
            $admin->display_name='Admin';
            $admin->description='إدارة المتجر';
            $admin->save();

            $user=new Role();
            $user->name='User';
            $user->display_name='User';
            $user->description='حساب مستخدم';
            $user->save();

            return true;
        }*/

        $adminrole=Role::where('name','Admin')->get();
        if($adminrole->count()==0){            
            $admin=new Role();
            $admin->name='Admin';
            $admin->display_name='Admin';
            $admin->description='إدارة المتجر';
            $admin->save();
        }
        $userrole=Role::where('name','User')->get();
        if($userrole->count()==0){
            $user=new Role();
            $user->name='User';
            $user->display_name='User';
            $user->description='حساب مستخدم';
            $user->save();

            return true;
        }

        return false;
    }
    
    

    public function generateUsers(){       

        $ad=User::where('email','Admin@gmail.com'/*$admin->email*/);
        if($ad->count()==0){
            $admin = new User();
            $admin->name = 'Admin';
            $admin->email = 'Admin@gmail.com';
            $admin->password=Hash::make('Admin@2023');                        
            //$admin->addRole('Admin');
            $admin->save();
        }
        return true;
    }

    public function generateUsersRoles(){        

        //$ad=User::find(8);//where('email','Admin@gmail.com');;
        $ad=User::where('email','Admin@gmail.com'/*$admin->email*/)-> first();
        $ad->addRole('Admin');
        $ad->save();
        return true;
    }

    public function generateAll(){
        $roleResult=$this->generateRoles();
        if($roleResult==true){
            $userResult=$this->generateUsers();
            if($userResult==true){
                return $this->generateUsersRoles();
            }
        }
        return false;
    }
}
