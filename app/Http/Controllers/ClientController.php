<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\material;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function ClientMaster(){
        $category=Category::get();
        return view('client.layout.master')->with('allcategories',$category);
    }
    public function signup(){
        return view('client.layout.ClientSigninUP');
    }
    public function HomePage(){
        $category=Category::get();
        $material=material::get();
        $store=Store::orderBy('id','desc')->take(3)->get();
        $product=Product::orderBy('id','desc')->take(3)->get();
        return view('client.layout.homPage')->with('allcategories',$category)->with('store',$store)->with('product',$product)->with('allmaterials',$material);
    }
    public function Catproducts($id){
        
        $category= Category::where('id',$id)->first();
        if($category){

            $product=$category->products()->get();
            return view('client.layout.categoriesCont',compact('product','category'));

        }else{
            return redirect()->back();
        }
        
    }
    public function bestSalle(){
        $product=Product::get();
        $category=Category::get();
        return view('client.layout.bestSalle')->with('allcategories',$category)->with('product',$product);
    
    }
    public function Offers(){
        $category=Category::get();
        return view('client.layout.offers')->with('allcategories',$category);
    
    }
    public function Favoreit(){
        $category=Category::get();
        return view('client.layout.Favoreits')->with('allcategories',$category);
    }
    public function Cart(){
        $category=Category::get();
        return view('client.layout.shoping-cart')->with('allcategories',$category);
    }
    public function ProducrDetails($id){
        $category=Category::get();
        $product=Product::find($id);
        return view('client.layout.product-detail')->with('allcategories',$category)->with('product',$product);
    }
    public function Stores(){
        $category=Category::get();
        $store=Store::get();
        return view('client.layout.stores')->with('allcategories',$category)->with('allStores',$store);
    }

    public function contact(){
        $category=Category::get();
        return view('client.layout.contact')->with('allcategories',$category);
    }
    public function store_details($id){
        $category=Category::get();
        $store=Store::find($id);
        return view('client.layout.store-details')->with('allcategories',$category)->with('store',$store);
    }
    public function categories(){
        $category=Category::get();
        return view('client.layout.categories')->with('allcategories',$category);
    }


    public function materials(){
        $material=material::get();
        return \view('client.layout.materialsCateg')->with('allmaterials',$material);
    }



    public function AllProduct()  
    {   $category=Category::get();
        $product=Product::get();
        $material=material::get();
        return view('client.layout.AllProduct',\compact('product','category'))->with('allcategories',$category)->with('product',$product)->with('material',$material);
    }

    public function searchProduct(Request $request){
        if($request->search)
        {
            $searchProduct= Product::where('name','like','%'.$request->search.'%')->latest()->paginate(5);
            return view('client.layout.search',\compact('searchProduct'));
        }
        else
        {
            return \redirect()->back();
        }

    }

    public function searchcat(Request $request){
        if($request->search)
        {
            $searchcat= Category::where('name','like','%'.$request->search.'%')->latest()->paginate(5);
            return view('client.layout.searchCat',\compact('searchcat'));
        }
        else
        {
            return \redirect()->back();
        }

    }



    public function AddUser(Request $request){
        $x = new User();
        $x->name =$request->name;
        $x->email = $request->email;
        $x->password=Hash::make($request->password);        
        $x->save();
        $x->addRole('User');
        return redirect(route("login"));
    }


}
