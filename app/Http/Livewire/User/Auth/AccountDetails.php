<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountDetails extends Component
{

    public $first_name,$last_name,$email,$username;

    public function mount()
    {
        $users=User::findOrFail(Auth::user()->id);
        $this->first_name=$users->first_name;
        $this->last_name=$users->last_name;
        $this->email=$users->email;
        $this->username=$users->username;
    }
    public function render()
    {
        return view('livewire.user.auth.account-details')->layout('layout.user');
    }


    public function updateProfile()
    {
        $this->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'username' =>'required'
        ]);
        $users=$users=User::findOrFail(Auth::user()->id);
        $users->first_name=$this->first_name;
        $users->last_name=$this->last_name;
        $users->email=$this->email;
        $users->username=$this->username;
        $result=$users->save();
        if($result){
            session()->flash('success','Profile Update Successfully');
        }else{
            session()->flash('success','Profile Not Update Successfully');
        }
        
    }
}
