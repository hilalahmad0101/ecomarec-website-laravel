<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public $products;
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
        $this->categories=Category::orderBy('id','desc')->where('status',1)->get();
        $this->products=Product::orderBy('id','desc')->where('status',1)->get();
        return view('livewire.home')->layout('layout.app');
    }
}
