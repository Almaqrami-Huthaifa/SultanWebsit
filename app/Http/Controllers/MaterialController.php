<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\material;
use App\Models\Store;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function creatematerial(){
       
        $category=Category::get();
        
        return view('admin.layout.material.add')->with('allcategories',$category);
    }


    public function storeMat(Request $request){
        
        /*$product->image_path=$request->ProImage;*/
        
        
        /*if($product->save());
        return redirect()->route("ProductList");
        return \redirect()->back();*/
        $material=new material();
        $material->name=$request->productName;
        $material->category_id = $request->category_id;
        if($request->file('Product_image')!=null)
            $material->image_path=$this->uploadImage('materials',$request->file('Product_image'));        
        try {
            //code...
            if ($material->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert22 faild');
        }

        
        
    }

    public function MatlList(){
        $material= material::get();
        return view('admin.layout.material.list')->with('allmaterials',$material);
    }

    
    public function EditMat($id)
    {
        $material= material::find($id);
        
        
        return view('admin.layout.material.EditMat')->with('material', $material);
    }

    public function saveOldMat(Request $request)
    {
        $material = material::find($request->id);
        $material->name= $request->proName;
        if($request->file('Product_image')!=null)
            $material->image_path=$this->uploadImage('materials',$request->file('Product_image'));
        else $material->Product_image=$request->oldProduct_image;
        try {
            //code...
            if ($material->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->back()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert faild');
        }
    }

    public function DetailMat($id)
    {
        $material = material::find($id);
        $category=Category::get();
        return view('admin.layout.material.details')->with('allcategories',$category)->with('material', $material);
    }

    public function DeleteMat($id)
    {
        $material = material::find($id);
        $category=Category::get();
        return view('admin.layout.material.delet')->with('allcategories',$category)->with('material', $material);
    }

    public function confirmDeleteMat(Request $request){
        $material=material::find($request->id);
        if($material != null){
           $material->delete();
            return redirect()->route("MatlList");
        }
        {
        return redirect()->back();
        }
    }










    public function Category($id){
        
        $material= material::where('id',$id)->first();
        if($material){

            $category=$material->materials()->get();
            return view('client.layout.categories',compact('materials','material'));

        }else{
            return redirect()->back();
        }
}
}
