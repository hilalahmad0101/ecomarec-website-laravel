<?php

namespace App\Http\Livewire\User\Auth;

use App\Mail\user\otpmail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ForgetPassword extends Component
{

    public $email;
    public function render()
    {
        return view('livewire.user.auth.forget-password')->layout('layout.user');
    }

    public function forgetPassword()
    {
        $users=User::where('email',$this->email)->first();
        if($users){
            $password=rand(9999999,1000000);
            $users->password=Hash::make($password);
            $users->save();
            $details = [
                'title' => "Welcome {$this->email} , Your new Password",
                'body' => $password
            ];
            $data = \Mail::to($this->email)->send(new otpmail($details));
            if ($data) {
                session()->flash('success', 'Check mail and Update your password');
                return redirect(route('user.my-account'));
            } else {
                session()->flash('error', 'Mail sending failed');
            }
        }else{
            session()->flash('
            ', "<strong>{$this->email}</strong> is incorrect");
        }
    }
}
