<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authentication extends Component
{
    public $name, $email, $password, $mobile, $gst;
    public function render()
    {
        return view('livewire.vendor.auth.authentication')->layout('layout.vendor');
    }


    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:vendors,email',
            'password' => 'required|min:6',
            'mobile' => 'required'
        ]);
        $vendor = new Vendor();
        $vendor->name = $this->name;
        $vendor->email = $this->email;
        $vendor->password = Hash::make($this->password);
        $vendor->mobile = $this->mobile;
        $vendor->gst = $this->gst ? 1 : 0;
        $result = $vendor->save();
        if ($result) {
            session()->flash('success', 'Register Successfully. Admin will inform you');

            $this->name = "";
            $this->email = "";
            $this->password = "";
            $this->mobile = "";
            $this->gst = "";
        }
    }
}
