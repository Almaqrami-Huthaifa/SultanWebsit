<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function uploadImage($folder,$image){
        $image_name= time() .'.'.$image->extension();
        $folder='/images/'.$folder.'/';        
        $image->move(public_path($folder),$image_name);
        return $folder.$image_name;
   }
}
