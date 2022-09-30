<?php

namespace App\Http\Livewire\Vendor\Auth;

use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $login_email, $login_password;

    public function render()
    {
        return view('livewire.vendor.auth.login')->layout('layout.vendor-login');
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

        $vendor = Vendor::where('email', $this->login_email)->first();
        if ($vendor) {
            if (Hash::check($this->login_password, $vendor->password)) {
                if ($vendor->status == 1) {
                    $vendors = Auth::guard('vendor')->attempt(['email' => $this->login_email, 'password' => $this->login_password]);
                    if ($vendors) {
                        session()->flash('success', 'Login Successfully Please update your password');
                        return redirect(route('vendor.dashboard'));
                    }
                } else {
                    session()->flash('error', 'Your Account is not Verified');
                }
            } else {
                session()->flash('error', 'Invalid Email and password');
            }
        } else {
            session()->flash('error', 'Invalid Email and password');
        }
    }
}
