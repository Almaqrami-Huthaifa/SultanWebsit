<?php

namespace App\Http\Livewire\Client\Layout;

use App\Models\cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AllProduct extends Component
{

    public $product, $category, $QuantityC = 1;

    public function decrement()
    {

        if ($this->QuantityC > 1) {

            $this->QuantityC--;
        }
    }
    public function increment()
    {

        if ($this->product->quantity < 10) {

            $this->QuantityC++;
        }
    }
    public function AddToCart(int $productId)
    {
        if (Auth::check()) {

            if ($this->product->where('id', $productId)->where('status', '0')->exists()) {
                if (cart::where('user_id', Auth()->User()->id)->where('product_id', $productId)->exists()) {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'product is already added',
                        'type' => 'warning',
                        'status' => 200
                    ]);
                }
                if ($this->product->quantity > 0) {

                    if ($this->product->quantity > $this->QuantityC) {
                        cart::create([
                            'user_id' => Auth()->user()->id,
                            'product_id' => $productId,
                            'quantity' => $this->QuantityC
                        ]);
                        $this->emit('cartAddUpdate');
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'product add to the card',
                            'type' => 'success',
                            'status' => 200
                        ]);
                    } else {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Only' . $this->product->quantity . 'this quantity is Availabl',
                            'type' => 'warning',
                            'status' => 404
                        ]);
                    }
                } else {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'the product is out of stock',
                        'type' => 'warning',
                        'status' => 404
                    ]);
                }

                //dd($productId);

            } else {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'product is not added',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }
        }
    }

    public function mount($product, $category)
    {


        $this->product = $product;
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.client.layout.all-product', ['product' => $this->product, 'category' => $this->category]);
    }
}
