<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{

    public $carts;
    public $qty=0;

    public function render()
    {
        $this->carts=ModelsCart::where('user_id',Auth::user()->id)->get();
        return view('livewire.user.auth.cart')->layout('layout.user');
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

    public function updateUserCart($id)
    {
       $carts=ModelsCart::findOrFail($id);
       $total_qty=$carts->qty + $this->qty;
       $carts->qty=$total_qty;
       $carts->total_price=$carts->products->price*$total_qty;
       $carts->save();
       session()->flash('success','Cart Update Successfully');
       $this->dispatchBrowserEvent('showCartCount');
       $this->qty=0;
    }

    public function deleteCart($id) 
    {
        $carts=ModelsCart::findOrFail($id)->delete();
        if($carts){
            session()->flash('success','Cart Delete Successfully');
            $this->dispatchBrowserEvent('showCartCount');
        }
    }
}
