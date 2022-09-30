<?php

namespace App\Http\Livewire\Admin;

use App\Mail\VendorMail;
use App\Models\Vendor as ModelsVendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;

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
        $url = "https://messages-sandbox.nexmo.com/v0.1/messages";
        $params = [
            "to" => ["type" => "whatsapp", "number" => '92 342 3601581'],
            "from" => ["type" => "whatsapp", "number" => "14157386102"],
            "message" => [
                "content" => [
                    "type" => "text",
                    "text" => "Hello from Vonage and Laravel :) Please reply to this message with a number between 1 and 100"
                ]
            ]
        ];
        $headers = ["Authorization" => "Basic " . base64_encode(env('NEXMO_API_KEY') . ":" . env('NEXMO_API_SECRET'))];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        $data = $response->getBody();
        dd($data);
        Log::Info($data);
        return view('thanks');
    }
}
