<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    public
        $edit_id,
        $product_title,
        $sale_price,
        $category,
        $price,
        $items,
        $small_content,
        $long_content,
        $old_image,
        $new_image;

    public $categories;
    use WithFileUploads;
    public function mount($id)
    {
        $products = Product::findOrFail($id);
        $this->edit_id = $products->id;
        $this->product_title = $products->product_title;
        $this->sale_price = $products->sale_price;
        $this->category = $products->cat_id;
        $this->price = $products->price;
        $this->items = $products->items;
        $this->small_content = $products->small_content;
        $this->long_content = $products->long_content;
        $this->old_image = $products->image;
    }
    public function render()
    {
        $this->categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
        return view('livewire.vendor.update-product')->layout('layout.vendor');
    }

    public function save()
    {
        $products = Product::findOrFail($this->edit_id);
        $this->validate([
            'product_title' => 'required',
            'sale_price' => 'required',
            'category' => 'required',
            'price' => 'required',
            'items' => 'required',
            'small_content' => 'required',
            'long_content' => 'required',
        ]);
        $filename = "";
        if ($this->new_image) {
            $filename = $this->new_image->store('products', 'public');
        } else {
            $filename = $this->old_image;
        }
        $products->product_title = $this->product_title;
        $products->sale_price = $this->sale_price;
        $products->cat_id = $this->category;
        $products->price = $this->price;
        $products->items = $this->items;
        $products->small_content = $this->small_content;
        $products->long_content = $this->long_content;
        $products->image = $filename;
        $result = $products->save();
        if ($result) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('vendor.products'));
        }
    }
}
