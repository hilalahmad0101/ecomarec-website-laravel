<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class Order extends Component
{
    public $shipping_address=false;
    public $check;
    public function render()
    {
        return view('livewire.user.auth.order')->layout('layout.user');
    }

    public function showBillingAddress()
    {
        return $this->check
        ? $this->shipping_address=true
        : $this->shipping_address=false;
    }
}
