<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\material;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function Forms(){
        $store=Store::get();
        $category=Category::get();
        return view('admin.layout.forms')->with('allStores',$store)->with('allcategories',$category);
    }
    /**=============================================== */
    public function createCategory(){

        return view('admin.layout.createCategory');
    }

    public function storCat(request $request){
        $category=new Category();
        $category->name=$request->CategoryName;
        
        if($category->save());
        return redirect()->route("admindash");
        return redirect()->back()->with(['message'=>'error the new category is not saved']);


    }


/**=========================================================== */
    public function createproduct(){
        $store=Store::get();
        $category=Category::get();
        $material=material::get();
        return view('admin.layout.product.createProduct')->with('allStores',$store)->with('allcategories',$category)->with('allmaterials',$material);
    }


    public function storePro(Request $request){
        
        /*$product->image_path=$request->ProImage;*/
        
        
        /*if($product->save());
        return redirect()->route("ProductList");
        return \redirect()->back();*/
       

        $product=new Product();
        $product->name=$request->productName;
        $product->price=$request->productPrice;
        $product->discreptin=$request->ProDiscreption;
        $product->category_id = $request->category_id;
        $product->material_id= $request->material_id;
        $product->store_id = $request->store_id;

        if($request->file('Product_image')!=null)
            $product->image_path=$this->uploadImage('product',$request->file('Product_image'));        
        try {
            //code...
            if ($product->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert22 faild');
        }

        
        
    }
    public function stor(){
        return view('admin.layout.product.stor');
    }
    public function ProductList(){
        $product=Product::get();
        return view('admin.layout.product.productList')->with('product',$product);
    }

    /**=========================================================== */
    public function CreateStore(){
        return view('admin.layout.createStore');
    }

    public function storeStor(Request $request){
        $store = Store::get();
        $store->name=$request->StoreName;
        $store->discreptin=$request->StoreDiscreption;
        if($request->file('StoreImage')!=null)
        $store->image_path=$this->uploadImage('stores',$request->file('StoreImage'));
        
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










        /*



        $store=new Store();
        $store->name=$request->StoreName;
        $store->discreptin=$request->StoreDiscreption;
        if($request->file('StoreImage')!=null)
        $store->image_path=$this->uploadImage('store',$request->file('StoreImage'));
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
        }*/

       

    }
    public function EditPro($id)
    {
        $product = product::find($id);
        $category=Category::get();
        
        return view('admin.layout.product.EditProduct')->with('allcategories',$category)->with('product', $product);
    }

    public function saveOldPro(Request $request)
    {
        $product = product::find($request->id);
        $product->name= $request->proName;
        $product->price= $request->ProPrice;
        $product->category_id = $request->category_id;
        if($request->file('Product_image')!=null)
            $product->image_path=$this->uploadImage('product',$request->file('Product_image'));
        else $product->Product_image=$request->oldProduct_image;
        try {
            //code...
            if ($product->save()) {
                //return redirect()->back()->with(['successMsg'=>'Insert success']);
                return redirect()->back()->with(['successMsg' => 'Insert success']);
            }
            //else redirect()->back();
            return redirect()->back()->with('errorMsg', 'Insert faild');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMsg', 'Insert faild');
        }
    }

    public function DetailPro($id)
    {
        $product = product::find($id);
        $category=Category::get();
        return view('admin.layout.product.details')->with('allcategories',$category)->with('product', $product);
    }

    public function DeletePro($id)
    {
        $product = product::find($id);
        $category=Category::get();
        return view('admin.layout.product.delete')->with('allcategories',$category)->with('product', $product);
    }

    public function confirmDeletePro(Request $request){
        $product=product::find($request->id);
        if($product != null){
           $product->delete();
            return redirect()->route("ProductList");
        }
        {
        return redirect()->back();
        }
    }
   




    public function Dashboard(){
        
        return view('admin.layout.AdminDashboard');
    }








}
