<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $new_password, $c_password;
    public function render()
    {
        return view('livewire.vendor.auth.change-password')->layout('layout.vendor');
    }

    public function changePassword()
    {
        $this->validate([
            'new_password' => 'required',
            'c_password' => 'required',
        ]);
        if ($this->new_password != $this->c_password) {
            session()->flash('error', 'New password and Confirm password is not equal');
        } else {
            $vendor = Vendor::findOrFail(Auth::guard('vendor')->user()->id);
            $vendor->password = Hash::make($this->new_password);
            $vendor->save();
            session()->flash('success', 'Password Change Successfully');
            $this->new_password="";
            $this->c_password="";
        }
    }
}
