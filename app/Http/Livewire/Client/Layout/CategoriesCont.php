<?php

namespace App\Http\Livewire\Client\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoriesCont extends Component
{
    public function adToCart(int $productId){
        if(Auth::cheach()){

            dd($productId);

        }
        else
        {
            $this->dispatchBrowserEvent('message',[
            'text'=>'please login to add to cart',
            'type'=>'info',
            'status'=>401
        ]);

        }

    }
    public $product,$category;
    public function mount($product , $category){


        $this->product = $product;
        $this->category = $category;

    }
            
    public function render()
    {
       

        return view('livewire.client.layout.categories-cont',['product'=>$this->product,'category'=>$this->category]);
    }
}
