<?php

namespace App\Http\Livewire\User\Auth;

use App\Mail\user\otpmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class VerifyOtp extends Component
{
    public $otp;
    public function render()
    {
        return view('livewire.user.auth.verify-otp')->layout('layout.user');
    }

    public function resendOtp()
    {

        $users = User::findOrFail(Auth::user()->id);
        $rand = rand(999999, 100000);
        $details = [
            'title' => 'otp for verify email and get new products',
            'body' => $rand
        ];
        $data = \Mail::to($users->email)->send(new otpmail($details));
        $users->otp = $rand;
        $users->save();
        if ($data) {
            session()->flash('success', 'Check mail');
        }
    }


    public function verifiedOtp()
    {
        $this->validate([
            'otp' => 'required'
        ]);
        $users = User::where('otp', $this->otp)->first();
        if ($users) {
            $users->verified = 1;
            $users->save();
        } else {
            session()->flash('error', 'Invalid Otp');
        }
    }
}
