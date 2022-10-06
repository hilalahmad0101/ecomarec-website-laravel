<?php

namespace App\Http\Livewire\User\Auth;

use App\Mail\user\otpmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Socialite;
use Twilio\Rest\Client;

class Registration extends Component
{
    public $email, $password, $otp;
    public $email_or_phone, $login_password;
    public $showOtp = false;
    public $forget_email;
    public function render()
    {
        return view('livewire.user.auth.registration');
    }
    public function get()
    {
        dd("hello");
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
        $users->mobile_number = 0;
        $users->image = " ";
        $users->gender = 0;
        $result = $users->save();
        $this->showOtp = true;
    }
    public function create()
    {

        $this->validate([
            'otp' => 'required',
            'password' => 'required|string|min:6|max:10',
        ]);
        $user = User::where('email', $this->email)->first();
        if ($this->otp == $user->otp) {
            $user->password = Hash::make($this->password);
            $user->verified = 1;
            $user->save();
            Auth::login($user);
            return redirect(route('user.dashboard'));
        } else {
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
                'email_or_phone' => 'required',
                'login_password' => 'required|string|min:6|max:10',
            ],
            [
                'email_or_phone' => [
                    'required' => 'The email or phone is required',
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
        $users = "";
        if (is_numeric($this->email_or_phone)) {
            $users = Auth::attempt(['mobile_number' => $this->email_or_phone, 'password' => $this->login_password]);
        } elseif (filter_var($this->email_or_phone, FILTER_VALIDATE_EMAIL)) {
            $users = Auth::attempt(['email' => $this->email_or_phone, 'password' => $this->login_password]);
        }
        if ($users) {
            session()->flash('success', " Login Successfully");
            return redirect(route('home'));
        } else {
            session()->flash('error', " Invalid Email and Password");
        }

        // $users = User::where('email', $this->email_or_phone)->first();
        // if ($users) {
        //     $password = Hash::check($this->login_password, $users->password);
        //     if ($password) {
        //         if ($users->verified == 1) {
        //             $user = Auth::attempt(['email' => $this->login_email, 'password' => $this->login_password]);
        //             if ($user) {
        //                 session()->flash('success', 'Login Success');
        //                 return redirect(route('user.dashboard'));
        //             } else {
        // session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
        //                 href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
        //                 your password?</a>");
        //             }
        //         } else {
        //             session()->flash('verified', "Please Verified Your Account");
        //         }
        //     } else {
        //         session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
        //         href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
        //         your password?</a>");
        //     }
        // } else {
        //     session()->flash('error', "  <strong>{ $this->login_email}</strong> is incorrect. <a
        //     href='https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/'>Lost
        //     your password?</a>");
        // }
    }

    public function googleSignup()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleSignupCallback()
    {


        try {
            $user = Socialite::driver('google')->user();
            if ($user) {
                $checkEmail = User::where('email', $user->email)->first();
                Auth::login($checkEmail);
            } else {
                $users = new User();
                $email  = $user->email;
                $username = strstr($email, '@', true);
                $users->first_name = " ";
                $users->last_name = " ";
                $users->username = $username;
                $users->email = $user->email;
                $users->mobile_number = " ";
                $users->password = " ";
                $result = $users->save();
                if ($result) {
                    return redirect(route('home'));
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function forgetPassword()
    {

        $this->validate([
            'forget_email' => 'required',
        ], [
            'email_or_phone' => [
                'required' => 'The email or phone is required',
            ],
        ]);
        if (is_numeric($this->forget_email)) {
            $users = User::where('mobile_number', $this->forget_email)->first();
            if ($users) {
                $password = rand(9999999, 1000000);
                $users->password = Hash::make($password);
                $users->save();
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_AUTH_TOKEN");
                $twilio_number = getenv("TWILIO_NUMBER");
                $client = new Client($account_sid, $auth_token);
                $message = $client->messages->create($this->forget_email, ['from' => $twilio_number, 'body' => 'Otp send Send ' . $password]);
                if ($message->sid) {
                    session()->flash('success', 'check your mobile For a password');
                    return redirect(route('home'));
                } else {
                    session()->flash('error', 'message sending faild');
                }
            } else {
                session()->flash('error', "<strong>{$this->forget_email}</strong> is incorrect");
            }
        } elseif (filter_var($this->forget_email, FILTER_VALIDATE_EMAIL)) {
            $users = User::where('email', $this->forget_email)->first();
            if ($users) {
                $password = rand(9999999, 1000000);
                $users->password = Hash::make($password);
                $users->save();
                $details = [
                    'title' => "Welcome {$this->email} , Your new Password",
                    'body' => $password
                ];
                $data = \Mail::to($this->forget_email)->send(new otpmail($details));
                if ($data) {
                    session()->flash('success', 'Check mail and Update your password');
                    return redirect(route('home'));
                    $this->forget_email="";
                } else {
                    session()->flash('error', 'Mail sending failed');
                }
            } else {
                session()->flash('error', "<strong>{$this->forget_email}</strong> is incorrect");
            }
        }
    }
}
