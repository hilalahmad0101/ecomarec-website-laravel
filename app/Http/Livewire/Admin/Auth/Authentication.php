<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Authentication extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.admin.auth.authentication')->layout('layout.admin-login');
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admins = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admins) {
            return redirect(route('admin.dashboard'));
        }else{
            session()->flash('error','Invalid Username and password');
        }
    }
}
