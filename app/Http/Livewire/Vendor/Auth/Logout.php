<?php

namespace App\Http\Livewire\Vendor\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.vendor.auth.logout');
    }


    public function logout()
    {
        Auth::guard('vendor')->logout();
        return redirect(route('vendor.login'));
    }
}
