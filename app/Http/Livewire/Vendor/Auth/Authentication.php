<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authentication extends Component
{
    public $name, $email, $mobile, $gst, $owner_name, $company_name, $business_location;

    public $is_login=false;
    public $is_register=false;
    public function render()
    {
        return view('livewire.vendor.auth.authentication')->layout('layout.vendor-login');
    }
    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:vendors,email',
            'mobile' => 'required',
            'owner_name' => 'required',
            'business_location' => 'required',
        ]);
        $vendor = new Vendor();
        $vendor->name = $this->name;
        $vendor->email = $this->email;
        $vendor->owner_name = $this->owner_name;
        $vendor->business_location = $this->business_location;
        $vendor->company_name = $this->company_name;
        $vendor->categories = "null";
        $vendor->password = '';
        $vendor->mobile = $this->mobile;
        $vendor->status = 0;
        $vendor->gst = $this->gst ? 1 : 0;
        $result = $vendor->save();
        if ($result) {
            session()->flash('success', 'Register Successfully. Admin will inform you');
            $this->name = "";
            $this->email = "";
            $this->password = "";
            $this->mobile = "";
            $this->gst = "";
            $this->owner_name = "";
            $this->company_name = "";
            $this->business_location = "";
        }
    }


    
}
