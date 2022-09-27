<?php

namespace App\Http\Livewire\Vendor\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.vendor.auth.dashboard')->layout('layout.vendor');
    }

    public function logout()
    {
        Auth::guard('vendor')->logout();
        return redirect(route('vendor.auth'));
    }

}
