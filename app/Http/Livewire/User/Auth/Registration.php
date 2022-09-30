<?php

namespace App\Http\Livewire\User\Auth;

use App\Mail\user\otpmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Registration extends Component
{
    public $email, $password, $otp;
    public $login_email, $login_password;
    public $showOtp = false;
    public function render()
    {
        return view('livewire.user.auth.registration')->layout('layout.user');
    }

    public function nextStep()
    {
        $users = new User();
        $this->validate([
            'email' => 'required|email|unique:users,email',
        ]);
        $rand = rand(999999, 100000);
        $details = [
            'title' => 'otp for verify email and get new products',
            'body' => $rand
        ];
        $data = \Mail::to($this->email)->send(new otpmail($details));
        if ($data) {
            session()->flash('success', 'Check mail and Verify your otp');
        } else {
            session()->flash('error', 'Mail sending failed');
        }
        $email  = $this->email;
        $username = strstr($email, '@', true);
        $users->first_name = " ";
        $users->last_name = " ";
        $users->username = $username;
        $users->email = $this->email;
        $users->password = " ";
        $users->otp = $rand;
        $result = $users->save();
        $this->showOtp = true;
    }
    public function create()
    {
       
        $this->validate([
            'password' => 'required|string|min:6|max:10',
        ]);
            $user = User::where('email', $this->email)->first();
            if ($this->otp == $user->otp) {
                $user->password = Hash::make($this->password);
                $user->verified=1;
                $user->save();
                Auth::login($user);
                return redirect(route('user.dashboard'));
            }else{
                session()->flash('error', 'Invalid opt');
            }
        // $email  = $this->email;
        // $username = strstr($email, '@', true);
        // $users->first_name = " ";
        // $users->last_name = " ";
        // $users->username=$username;
        // $users->email = $this->email;
        // $users->password = Hash::make($this->password);
        // $users->otp = $rand;
        // $result = $users->save();
        // Auth::login($users);
        // if ($result) {

        // } else {
        //     session()->flash('error', 'Account Create failed');
        // }
    }


    public function login()
    {
        $this->validate(
            [
                'login_email' => 'required|email',
                'login_password' => 'required|string|min:6|max:10',
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

        // active and deactive is remaining
        $users = User::where('email', $this->login_email)->first();
        if ($users) {
            $password = Hash::check($this->login_password, $users->password);
            if ($password) {
                if ($users->verified == 1) {
                    $user = Auth::attempt(['email' => $this->login_email, 'password' => $this->login_password]);
                    if ($user) {
                        session()->flash('success', 'Login Success');
                        return redirect(route('user.dashboard'));
                    } else {
                        session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
                        href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
                        your password?</a>");
                    }
                } else {
                    session()->flash('verified', "Please Verified Your Account");
                }
            } else {
                session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
                href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
                your password?</a>");
            }
        } else {
            session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
            href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
            your password?</a>");
        }
    }
}
