<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $total_sales;
    public $total_products;
    public function render()
    {
        $this->total_sales=Order::where('owner_id',Auth::guard('vendor')->user()->id)->sum('sub_total');
        $this->total_products=Product::where('owner_id',Auth::guard('vendor')->user()->id)->count();
        return view('livewire.vendor.auth.dashboard')->layout('layout.vendor');
    }

    public function logout()
    {
        Auth::guard('vendor')->logout();
        return redirect(route('vendor.auth'));
    }

}
