<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Order as ModelsOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;

class Order extends Component
{
    public function render()
    {
        if(Auth::guard('vendor')->user()){
            $orders=ModelsOrder::orderBy('id', 'desc')->where('owner_id',Auth::guard('vendor')->user()->id)->get();
        }
        return view('livewire.vendor.order',compact('orders'))->layout('layout.vendor');
    }

    
}
