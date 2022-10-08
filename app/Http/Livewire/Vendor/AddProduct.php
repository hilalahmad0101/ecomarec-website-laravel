<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{
    public
        $product_title,
        $sale_price,
        $category,
        $price,
        $items,
        $small_content,
        $long_content,
        $image;

    public $categories;
    use WithFileUploads;
    public function render()
    {
        $this->categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
        return view('livewire.vendor.add-product')->layout('layout.vendor');
    }


    public function save()
    {
        $products = new Product();
        $this->validate([
            'product_title' => 'required',
            'sale_price' => 'required',
            'category' => 'required',
            'price' => 'required',
            'items' => 'required',
            'small_content' => 'required',
            'long_content' => 'required',
            'image' => 'required',
        ]);
        $filename = "";
        if ($this->image) {
            $filename = $this->image->store('products', 'public');
        }
        $products->product_title = $this->product_title;
        $products->owner_id = Auth::guard('vendor')->user()->id;
        $products->sale_price = $this->sale_price;
        $products->cat_id = $this->category;
        $products->price = $this->price;
        $products->items = $this->items;
        $products->small_content = $this->small_content;
        $products->long_content = $this->long_content;
        $products->image = $filename;
        $result = $products->save();

        $category = Category::findOrFail($this->category);
        $category->products = $category->products + 1;
        $category->save();
        if ($result) {
            session()->flash('success', 'Product Add Successfully, Admin will approve your Order and you will received a mail ');
            return redirect(route('vendor.products'));
        }
    }
}
