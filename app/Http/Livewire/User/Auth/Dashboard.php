<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.user.auth.dashboard')->layout('layout.user');
    }
}
