<?php

namespace App\Http\Livewire\Client\Layout;

use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCount extends Component
{ 
    public $CartCount;

   protected $listeners = ['cartAddUpdate'=>'checkCountCart'];

    public function checkCountCart(){
        if(Auth::check())
        {
            return $this->CartCount = cart::where('user_id',auth()->user()->id)->count();
        }else{
            return $this->CartCount = 0;
        }
    }



    public function render()
    {
        $this->CartCount = $this->checkCountCart();
        return view('livewire.client.layout.cart-count',[
            
            'CartCount' =>$this->CartCount
        ]);
    }
}
