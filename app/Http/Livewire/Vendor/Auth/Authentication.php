<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authentication extends Component
{
    public $name, $email, $password, $mobile, $gst;
    public $login_email,$login_password;
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


    public function login()
    {
        $this->validate(
            [
                'login_email' => 'required|email',
                'login_password' => 'required|string|min:6',
            ],
            [
                'login_email' => [
                    'required' => 'The email is required',
                    'email' => 'The email must be a valid email address',
                ],
                'login_password' => [
                    'required' => 'The password is required',
                    'max' => [
                        'string' => 'The password must not be greater than :max characters.'
                    ],
                    'min' => [
                        'string' => 'The password must be at least :min characters.'
                    ]
                ]
            ]
        );

        $vendors=Auth::guard('vendor')->attempt(['email'=>$this->login_email, 'password'=>$this->login_password]);
        return redirect(route('vendor.dashboard'));
    }
}
