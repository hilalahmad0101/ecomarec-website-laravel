<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public $checked;
    public function render()
    {
        $products=ModelsProduct::orderBy('id','desc')->get();
        return view('livewire.admin.product',compact('products'))->layout('layout.admin');
    }

    public function updateStatus($id)
    {
        $products=ModelsProduct::findOrFail($id);
        if($this->checked == true){
            $products->status=1;
            $products->save();
            session()->flash('success','Product Active successfully');
        }else{
            $products->status=0;
            $products->save();
            session()->flash('success','Product De-active update successfully');
        }
    }
}
