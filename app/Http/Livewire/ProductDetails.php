<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product_slug;
    public $product;
    public $relatedProducts;
    public $qty = 1;
    public function mount($id)
    {
        $this->product_slug = $id;
    }
    public function render()
    {
        $this->product = Product::findOrFail($this->product_slug);
        $this->relatedProducts = Product::where('cat_id', $this->product_slug)->get();
        return view('livewire.product-details')->layout('layout.user');
    }

    public function addToCart($id)
    {

        $addToCart = new Cart();
        $is_cart = Cart::where(['user_id'=> Auth::user()->id,'pro_id'=>$id])->first();
        if ($is_cart) {
            $is_cart->qty = $this->qty;
            $results = $is_cart->save();
            if ($results) {
                session()->flash('success', 'Quantity Update Successfully');
                $this->dispatchBrowserEvent('showCartCount');
            }
        } else {
            $addToCart->pro_id = $id;
            $addToCart->user_id = Auth::user()->id;
            $addToCart->qty = $this->qty;
            $result = $addToCart->save();
            if ($result) {
                session()->flash('success', 'Product  Successfully Add to Card');
                $this->dispatchBrowserEvent('showCartCount');
            }
        }
    }

    public function minus()
    {
        if ($this->qty != 1) {
            $this->qty -= 1;
        }
    }

    public function plus()
    {
        $this->qty += 1;
    }


    public function showTotalCount()
    {
        $carts = Cart::where(['user_id'=> Auth::user()->id,])->get();
        $total=0;
        foreach($carts as $cart){
            $total += $cart->qty;
        }
       echo $total;

    }
}
