<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdateProfile extends Component
{
    public $full_name, $username, $email, $oldPassword, $newPassword, $conPassword;

    public function mount()
    {
        $admins = Admin::findOrFail(Auth::guard('admin')->user()->id);

        $this->full_name = $admins->full_name;
        $this->username = $admins->username;
        $this->email = $admins->email;
    }
    public function render()
    {
        return view('livewire.admin.auth.update-profile')->layout('layout.admin');
    }

    public function updateProfile()
    {
        $admins = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $this->validate([
            'username' => 'required',
        ]);

        $admins->full_name = $this->full_name;
        $admins->username = $this->username;
        $admins->email = $this->email;

        if ($this->oldPassword) {
            if (Hash::check($this->oldPassword, $admins->password)) {
                if ($this->newPassword == $this->conPassword) {
                    $admins->password = Hash::make($this->newPassword);
                }
                else {
                    session()->flash('error', 'Confirm password is not match');
                }
            } else {
                session()->flash('error', 'Invalid old password');
            }
        }

        $result = $admins->save();
        if ($result) {
            session()->flash('success', 'Profile Update Successfully');
        }
    }
}
