<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Category;
use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Product extends Component
{
    public $categories;
    public
        $product_title,
        $sale_price,
        $category,
        $price,
        $items,
        $small_content,
        $long_content,
        $image;

    public
        $edit_id,
        $edit_product_title,
        $edit_sale_price,
        $edit_category,
        $edit_price,
        $edit_items,
        $edit_small_content,
        $edit_long_content,
        $old_image,
        $new_image;
    public function render()
    {
        $this->categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
        $products = ModelsProduct::where(['status' => 1, 'owner_id' => Auth::guard('vendor')->user()->id])->get();
        return view('livewire.vendor.product', compact('products'))->layout('layout.vendor');
    }
    use WithFileUploads;
    public function save()
    {
        $products = new ModelsProduct();
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
        if ($result) {
            session()->flash('success', 'Product Add Successfully');
        }
    }
    public function edit($id)
    {
        $products = ModelsProduct::findOrFail($id);
        $this->edit_id = $products->id;
        $this->edit_product_title = $products->product_title;
        $this->edit_sale_price = $products->sale_price;
        $this->edit_category = $products->cat_id;
        $this->edit_price = $products->price;
        $this->edit_items = $products->items;
        $this->edit_small_content = $products->small_content;
        $this->edit_long_content = $products->long_content;
        $this->old_image = $products->image;
    }

    public function update($id)
    {
        $products = ModelsProduct::findOrFail($id);
        $this->validate([
            'edit_product_title' => 'required',
            'edit_sale_price' => 'required',
            'edit_category' => 'required',
            'edit_price' => 'required',
            'edit_items' => 'required',
            'edit_small_content' => 'required',
            'edit_long_content' => 'required',
        ]);
        $filename = "";
        if ($this->new_image) {
            $filename = $this->new_image->store('products', 'public');
        } else {
            $filename = $this->old_image;
        }
        $products->product_title = $this->edit_product_title;
        $products->sale_price = $this->edit_sale_price;
        $products->cat_id = $this->edit_category;
        $products->price = $this->edit_price;
        $products->items = $this->edit_items;
        $products->small_content = $this->edit_small_content;
        $products->long_content = $this->edit_long_content;
        $products->image = $filename;
        $result = $products->save();
        if ($result) {
            session()->flash('success', 'Product Update Successfully');
        }
    }

    public function delete($id)
    {
        $products = ModelsProduct::findOrFail($id);
        $destination = public_path('storage\\' . $products->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $categories = Category::findOrFail($products->id);
        $categories->products = $categories->products - 1;
        $categories->save();
        if ($products->delete()) {
            session()->flash('success', 'Product Delete Successfully');
        }
    }
}
