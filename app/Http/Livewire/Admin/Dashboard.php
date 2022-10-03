<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $total_sales;
    public $total_products;
    public $total_users;
    public function render()
    {
        $this->total_sales=Order::sum('sub_total');
        $this->total_products=Product::count();
        $this->total_users=User::count();
        return view('livewire.admin.dashboard')->layout('layout.admin');
    }

    
}
