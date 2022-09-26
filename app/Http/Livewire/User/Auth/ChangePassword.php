<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class ChangePassword extends Component
{
    public function render()
    {
        return view('livewire.user.auth.change-password')->layout('layout.user');
    }
}
