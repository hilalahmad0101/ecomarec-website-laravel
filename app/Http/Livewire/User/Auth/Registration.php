<?php

namespace App\Http\Livewire\User\Auth;

use App\Mail\user\otpmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Registration extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.user.auth.registration')->layout('layout.user');
    }
    public function create()
    {
        $users = new User();
        $this->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|max:10',
        ]);
        $rand = rand(999999, 100000);
        $users->name = " ";
        $users->email = $this->email;
        $users->password = Hash::make($this->password);
        $users->otp = $rand;
        $result = $users->save();
        $mail = new PHPMailer(true);
        Auth::login($users);
        if ($result) {
            $details = [
                'title' => 'otp for verify email and get new products',
                'body' => $rand
            ];
            $data = \Mail::to($this->email)->send(new otpmail($details));
            if ($data) {
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                // $mail->isSMTP();                                            //Send using SMTP
                // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                // $mail->Username   = 'programmerhero6@gmail.com';                     //SMTP username
                // $mail->Password   = 'qnedxqmgrymwagbd';                               //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                // //Recipients
                // $mail->setFrom('programmerhero6@gmail.com', 'Hilal ahmad');
                // $mail->addAddress("$this->email");     //Add a recipient    
                // $mail->addReplyTo('programmerhero6@gmail.com', 'Information');
                // //Content
                // $mail->isHTML(true);                                  //Set email format to HTML
                // $mail->Subject = 'Verified Account';
                // $mail->Body    = "This is Your Otp <b>$rand</b>";
                // $mail->send();
                session()->flash('success', 'Check mail and Verify your otp');
                return redirect(route('user.verify-account'));
            } else {
                session()->flash('error', 'Mail sending failed');
            }
        } else {
            session()->flash('error', 'Account Create failed');
        }
    }
}
