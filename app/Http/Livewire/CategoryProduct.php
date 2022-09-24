<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
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
            $category=Category::where('slug',$this->slug)->first();
            $this->category_name=$category->category_name;
            $this->products = Product::where(['status'=>1,'cat_id'=>$category->id])->get();
            return view('livewire.category-product')->layout('layout.user');
        }
        $this->products = Product::where('status', 1)->get();
        return view('livewire.category-product')->layout('layout.user');
    }

    public function showCategoryProduct($slug)
    {
        $this->slug = $slug;
        // $products=Product::where(['status'=>1,'cat_id'=>$id])->get();
        // $this->products=$products;

    }
}
