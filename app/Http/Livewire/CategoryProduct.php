<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryProduct extends Component
{
    public $products;
    public $slug;
    public $category_name;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        if ($this->slug) {
            $category = Category::where('slug', $this->slug)->first();
            $this->category_name = $category->category_name;
            $this->products = Product::where(['status' => 1, 'cat_id' => $category->id])->get();
            return view('livewire.category-product')->layout('layout.app');
        }
        $this->products = Product::where('status', 1)->get();
        return view('livewire.category-product')->layout('layout.app');
    }

    // public function showCategoryProduct($slug)
    // {
    //     $this->slug = $slug;
    //     // $products=Product::where(['status'=>1,'cat_id'=>$id])->get();
    //     // $this->products=$products;

    // }

    public function addToWishlist($id)
    {
        $wishlist = new Wishlist();
        if (Auth::guard('web')->user()) {
            $is_wishlist = Wishlist::where(['pro_id' => $id, 'user_id' => Auth::user()->id])->first();
            if ($is_wishlist) {
                session()->flash('error', 'Already in wishlist');
                return redirect(route('category-product',['slug'=>$this->slug]));
            } else {
                $wishlist->pro_id = $id;
                $wishlist->user_id = Auth::user()->id;
                $result = $wishlist->save();
                if ($result) {
                    session()->flash('success', 'Product Add Successfully to wishlist');
                    return redirect(route('category-product',['slug'=>$this->slug]));
                    $this->dispatchBrowserEvent('getWishlistCount');
                }
            }
        } else {
            session()->flash('error', 'Please Login or Create account');
            return redirect(route('category-product',['slug'=>$this->slug]));
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
                return redirect(route('category-product',['slug'=>$this->slug]));
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
                    return redirect(route('category-product',['slug'=>$this->slug]));
                }
            }
        } else {
            session()->flash('error', 'Please Login or Create account');
            return redirect(route('category-product',['slug'=>$this->slug]));
        }
    }

    public function getTotalWishlistCount()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->count();
        echo $wishlists;
    }
}
