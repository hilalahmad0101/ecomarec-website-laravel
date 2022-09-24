<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountDetails extends Component
{

    public $first_name,$last_name,$email,$username;

    /**
     * The mount function is called when the component is created. It is used to set the initial values
     * of the component's properties
     */
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
        /* This is used to return the view of the component. */
        return view('livewire.user.auth.account-details')->layout('layout.user');
    }


    /**
     * This function is used to update the profile of the user.
     */
    public function updateProfile()
    {
        /* This is used to validate the form. */
        $this->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'username' =>'required'
        ]);
        /* This is used to find the user by id. */
        $users=$users=User::findOrFail(Auth::user()->id);
       /* This is used to update the profile of the user. */
        $users->first_name=$this->first_name;
        $users->last_name=$this->last_name;
        $users->email=$this->email;
        $users->username=$this->username;
        /* This is used to save the data in the database. */
        $result=$users->save();
        if($result){
            /* This is used to show the success message. */
            session()->flash('success','Profile Update Successfully');
        }else{
            session()->flash('success','Profile Not Update Successfully');
        }
        
    }
}
