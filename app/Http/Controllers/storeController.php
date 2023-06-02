<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class storeController extends Controller
{


    public function StoreList(){
        $store=Store::get();
        return view('admin.layout.store.storeList')->with('store',$store);

    }

    public function storeStor(Request $request){
        
        /*$product->image_path=$request->ProImage;*/
        
        
        /*if($product->save());
        return redirect()->route("ProductList");
        return \redirect()->back();*/
       

        $store=new Store();
        $store->name=$request->productName;
        
        $store->discreptin=$request->ProDiscreption;
 

        if($request->file('Product_image')!=null)
            $store->image_path=$this->uploadImage('stores',$request->file('Product_image'));        
        try {
            //code...
            if ($store->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert22 faild');
        }


}
public function EditStore($id)
    {
        $store = Store::find($id);
        
        return view('admin.layout.store.EditStor')->with('store',$store);
    }

    public function saveOldStore(Request $request)
    {
        $store = Store::find($request->id);
        $store->name= $request->proName;
        $store->discreptin=$request->ProDiscreption;
        if($request->file('Product_image')!=null)
            $store->image_path=$this->uploadImage('stores',$request->file('Product_image'));
        else $store->Product_image=$request->oldProduct_image;
        try {
            //code...
            if ($store->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->back()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert faild');
        }
    }

    public function DetailStore($id)
    {
        $store = Store::find($id);
        
        return view('admin.layout.store.details')->with('store',$store);
    }

    public function DeleteStore($id)
    {
        $store=Store::find($id);
        
        return view('admin.layout.store.delete')->with('store',$store);
    }

    public function confirmDeleteStore(Request $request){
        $store=Store::find($request->id);
        if($store != null){
           $store->delete();
            return redirect()->route("StoreList");
        }
        {
        return redirect()->back();
        }
    }
    
}

    

