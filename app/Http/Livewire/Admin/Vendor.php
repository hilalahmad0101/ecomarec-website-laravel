<?php

namespace App\Http\Livewire\Admin;

use App\Mail\VendorMail;
use App\Models\Vendor as ModelsVendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Twilio\Rest\Client;
class Vendor extends Component
{
    public $company_name, $email, $message, $vendor_id;
    public function render()
    {
        $vendors = ModelsVendor::orderBy('id', 'desc')->get();
        return view('livewire.admin.vendor', compact('vendors'))->layout('layout.admin');
    }


    public function showVendor($id)
    {
        $vendor = ModelsVendor::findOrFail($id);
        $this->company_name = $vendor->company_name;
        $this->email = $vendor->email;
        $this->vendor_id = $vendor->id;
    }

    public function sendMail()
    {
        $password = Str::uuid();
        $details = [
            'title' => 'Congrats your Account is approved',
            "url"=>'http://127.0.0.1:8000/vendors/login',
            'body' => $this->message,
            "email"=>$this->email,
            'password' => $password
        ];
        $data = \Mail::to($this->email)->send(new VendorMail($details));
        if ($data) {
            session()->flash('success', 'Email send Successfully');
            $vendor = ModelsVendor::findOrFail($this->vendor_id);
            $vendor->password = Hash::make($password);
            $vendor->status = 1;
            $vendor->save();
        } else {
            session()->flash('error', 'Mail sending failed');
        }
    }

    public function delete($id)
    {
        $vendor = ModelsVendor::findOrFail($id)->delete();
        if ($vendor) {
            session()->flash('success', 'Vendor Deleted Successfully');
        }
    }

    public function sendSms()
    {
        $sid    = getenv("TWILIO_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);
        
        $body = "Send message in laravel from ecomare website developed by hilal using twillio api";

       $data=$twilio->messages->create("whatsapp:+923429382554",["from" => "whatsapp:$wa_from", "body" => $body]);
    }
}
