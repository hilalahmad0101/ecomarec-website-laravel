<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishList extends Component
{
    public function render()
    {
        $wishlists=ModelsWishlist::where('user_id',Auth::user()->id)->get();
        return view('livewire.user.auth.wish-list',compact('wishlists'))->layout('layout.app');
    }
    public function deleteWishList($id) 
    {
        $carts=ModelsWishlist::findOrFail($id)->delete();
        if($carts){
            session()->flash('success','WishList Delete Successfully');
            $this->dispatchBrowserEvent('getWishlistCount');
        }
    }
    public function addToCart($id)
    {
        $wishlists=ModelsWishlist::findOrFail($id);
        $carts=new Cart();
        $products=Product::findOrFail($wishlists->pro_id);
        $carts->pro_id=$wishlists->pro_id;
        $carts->owner_id=$products->owner_id;
        $carts->user_id= Auth::user()->id;
        $carts->qty=1;
        $carts->total_price=$products->price;
        $result=$carts->save();
        if($result){
            session()->flash('success','Wishlist add to cart Successfully');
            $wishlists->delete();
            return redirect(route('user.carts'));
        }
    }
}
