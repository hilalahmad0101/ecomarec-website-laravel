<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\BillingAddress as ModelsBillingAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BillingAddress extends Component
{


    public $first_name, $last_name, $company_name, $country, $address_1, $address_2, $city, $state, $postcode, $phone, $email, $edit_id;

    public function mount()
    {
        $billings = ModelsBillingAddress::where('user_id', Auth::user()->id)->first();
        if ($billings) {
            $this->edit_id = $billings->id;
            $this->first_name = $billings->first_name;
            $this->last_name = $billings->last_name;
            $this->company_name = $billings->company_name;
            $this->country = $billings->country;
            $this->address_1 = $billings->street_address1;
            $this->address_2 = $billings->street_address2;
            $this->city = $billings->city;
            $this->state = $billings->state;
            $this->postcode = $billings->postcode;
            $this->phone = $billings->phone;
            $this->email = $billings->email;
        }
    }
    public function render()
    {
        return view('livewire.user.auth.billing-address')->layout('layout.app');
    }

    public function upBillingAddress()
    {
        $billing="";
        if ($this->edit_id == null) {
            $billing = new ModelsBillingAddress();
        } else {
            $billing = ModelsBillingAddress::findOrFail($this->edit_id);
        }   
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ], [
            'first_name' => [
                'required' => 'The First Name is required',
            ],
            'last_name' => [
                'required' => 'The Last Name is required',
            ],
            'address_1' => [
                'required' => 'The First Address is required',
            ],
        ]);

        $billing->user_id = Auth::user()->id;
        $billing->first_name = $this->first_name;
        $billing->last_name = $this->last_name;
        $billing->company_name = $this->company_name;
        $billing->country = $this->country;
        $billing->street_address1 = $this->address_1;
        $billing->street_address2 = $this->address_1;
        $billing->city = $this->city;
        $billing->state = $this->state;
        $billing->postcode = $this->postcode;
        $billing->phone = $this->phone;
        $billing->email = $this->email;
        $result = $billing->save();
        if ($result) {
            session()->flash('success', 'Billing Update Success');
            return redirect(route('user.addresses'));
        }
    }
}
