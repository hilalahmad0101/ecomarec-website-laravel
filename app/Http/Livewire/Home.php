<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public $products;
    public $sliders;
    public function render()
    {

        // $product=new Product();
        // $data=Http::get('https://fakestoreapi.com/products');
        // foreach($data->json() as $pro){
        //      $product->product_title=$pro['title'];
        //      $product->sale_price=$pro['price'];
        //      $product->price=$pro['price'];
        //      $product->small_content=$pro['description'];
        //      $product->items=30;
        //      $product->categories=rand(1,10);
        //      $product->long_content=$pro['description'];
        //      $product->image=$pro['image'];
        //      $product->save();
        // }
        $this->categories = Category::latest()->where(
            function ($query) {
                $query->where('status', 1);
            },
        )->where(
            function ($query) {
                $query->where('products', '>', 0);
            }
        )->get();
        $this->products = Product::latest()->where('status', 1)->get();
        $this->sliders=Slider::latest()->limit(3)->get();
        return view('livewire.home')->layout('layout.app');
    }


    public function addToWishlist($id)
    {
        $wishlist = new Wishlist();
        if (Auth::guard('web')->user()) {
            $is_wishlist = Wishlist::where(['pro_id' => $id, 'user_id' => Auth::user()->id])->first();
            if ($is_wishlist) {
                session()->flash('error', 'Already in wishlist');
                return redirect(route('home'));
            } else {
                $wishlist->pro_id = $id;
                $wishlist->user_id = Auth::user()->id;
                $result = $wishlist->save();
                if ($result) {
                    session()->flash('success', 'Product Add Successfully to wishlist');
                    return redirect(route('home'));
                    $this->dispatchBrowserEvent('getWishlistCount');
                }
            }
        } else {
            session()->flash('error', 'Please Login or Create account');
            return redirect(route('home'));
        }
    }

    public function addToCart($owner_id, $id)
    {
        if (Auth::guard('web')->user()) {
            $addToCart = new Cart();
            $product = Product::findOrFail($id);
            $is_cart = Cart::where(['user_id' => Auth::user()->id, 'pro_id' => $id])->first();
            if ($is_cart) {
                session()->flash('error', 'Already in card Please update cart');
                return redirect(route('home'));
            } else {
                $addToCart->pro_id = $id;
                $addToCart->user_id = Auth::user()->id;
                $addToCart->owner_id = $owner_id;
                $addToCart->qty = 1;
                $addToCart->total_price = 1 * $product->price;
                $result = $addToCart->save();
                if ($result) {
                    session()->flash('success', 'Product  Successfully Add to Card');
                    $this->dispatchBrowserEvent('showCartCount');
                    return redirect(route('home'));
                }
            }
        } else {
            session()->flash('error', 'Please Login or Create account');
            return redirect(route('home'));
        }
    }

    public function getTotalWishlistCount()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->count();
        echo $wishlists;
    }
}
