<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\BillingAddress;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Addresses extends Component
{

    public $billing_addresses;
    public $shipping_addresses;

    public function render()
    {
        $this->billing_addresses=BillingAddress::where('user_id',Auth::user()->id)->first();
        $this->shipping_addresses=ShippingAddress::where('user_id',Auth::user()->id)->first();
        return view('livewire.user.auth.addresses')->layout('layout.app');
    }
}
