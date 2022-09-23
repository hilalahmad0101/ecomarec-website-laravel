<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $email,$password;
    public function render()
    {
        return view('livewire.user.auth.login');
    }

    public function login()
    {
        $this->validate(
            [
                'email' => 'required|email',
                'password' => 'required|string|min:6|max:10',
            ],
        );

        // active and deactive is remaining

        $users = User::where('email', $this->email)->first();
        if ($users) {
            $password = Hash::check($this->password, $users->password);
            if ($password) {
                if ($users->verified == 1) {
                    $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
                    if ($user) {
                        session()->flash('success', 'Login Success');
                        return redirect(route('user.dashboard'));
                    }else{
                        session()->flash('error', '  <strong>programmerhero6@gmail.com</strong> is incorrect. <a
                        href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
                        your password?</a>');
                    }
                } else {
                    session()->flash('verified', "Please Verified Your Account");
                }
            } else {
                session()->flash('error', '  <strong>programmerhero6@gmail.com</strong> is incorrect. <a
                href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
                your password?</a>');
            }
        } else {
            session()->flash('error', '  <strong>programmerhero6@gmail.com</strong> is incorrect. <a
            href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
            your password?</a>');
        }
    }
}
