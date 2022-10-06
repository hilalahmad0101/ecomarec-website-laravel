<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password, $new_password, $confirm_password;
    public function render()
    {
        return view('livewire.user.auth.change-password')->layout('layout.app');
    }

    public function changePassword()
    {
        $this->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ], [
            'old_password' => [
                'required' => 'Old Password is Required'
            ],
            'new_password' => [
                'required' => 'New Password is Required'
            ],
            'confirm_password' => [
                'required' => 'Confirm Password is Required'
            ],
        ]);
        $users=User::findOrFail(Auth::user()->id);
        if($users){
            if(Hash::check($this->old_password,$users->password)){
                if($this->new_password == $this->confirm_password){
                    $users->password=Hash::make($this->new_password);
                    $result=$users->save();
                    
                    $this->old_password="";
                    $this->new_password="";
                    $this->confirm_password="";
                    if($result){
                        session()->flash('success','Password Change Successfully');
                    }else{
                        session()->flash('error','Server Problem');
                    }
                }else{
                    session()->flash('error','Confirm Password is not Matched');
                }
            }else{
                session()->flash('error','Invalid Password , forget your password');
            }
        }
    }
}
