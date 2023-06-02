<?php

namespace App\Http\Livewire\Client\Layout;

use Livewire\Component;

class CategoriesCont extends Component
{
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
