<?php

namespace App\Http\Livewire\User\Auth;

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

       $users=User::findOrFail(Auth::user()->id);
       $rand=rand(999999,100000);
       $mail = new PHPMailer(true);
       $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'programmerhero6@gmail.com';                     //SMTP username
       $mail->Password   = 'qnedxqmgrymwagbd';                               //SMTP password
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
       $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

       //Recipients
       $mail->setFrom('programmerhero6@gmail.com', 'Hilal ahmad');
       $mail->addAddress("$users->email");     //Add a recipient    
       $mail->addReplyTo('programmerhero6@gmail.com', 'Information');
       //Content
       $mail->isHTML(true);                                  //Set email format to HTML
       $mail->Subject = 'Verified Account';
       $mail->Body    = "This is Your Otp <b>$rand</b>";
       $users->otp=$rand;
       $users->save();
       if($mail->send()){
        session()->flash('success','Check mail');
        return redirect('/verify-account');
       }
    }


    public function verifiedOtp()
    {
        $this->validate([
            'otp' =>'required'
        ]);
        $users=User::where('otp',$this->otp)->first();
        if($users){
            $users->verified=1;
            $users->save();
        }else{
            session()->flash('error','Invalid Otp');
        }
    }
}
