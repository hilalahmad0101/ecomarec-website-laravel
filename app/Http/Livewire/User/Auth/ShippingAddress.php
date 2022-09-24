<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\ShippingAddress as ModelsShippingAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShippingAddress extends Component
{
    public $first_name, $last_name, $company_name, $country, $address_1, $address_2, $city, $state, $postcode,  $edit_id;

    public function mount()
    {
        $shippings = ModelsShippingAddress::where('user_id', Auth::user()->id)->first();
        if ($shippings) {
            $this->edit_id = $shippings->id;
            $this->first_name = $shippings->first_name;
            $this->last_name = $shippings->last_name;
            $this->company_name = $shippings->company_name;
            $this->country = $shippings->country;
            $this->address_1 = $shippings->street_address1;
            $this->address_2 = $shippings->street_address2;
            $this->city = $shippings->city;
            $this->state = $shippings->state;
            $this->postcode = $shippings->postcode;
        }
    }
    public function render()
    {
        return view('livewire.user.auth.shipping-address')->layout('layout.user');
    }

    public function upShippingAddress()
    {
        $shipping="";
        if ($this->edit_id == null) {
            $shipping = new ModelsShippingAddress();
        } else {
            $shipping = ModelsShippingAddress::findOrFail($this->edit_id);
        }   
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
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

        $shipping->user_id = Auth::user()->id;
        $shipping->first_name = $this->first_name;
        $shipping->last_name = $this->last_name;
        $shipping->company_name = $this->company_name;
        $shipping->country = $this->country;
        $shipping->street_address1 = $this->address_1;
        $shipping->street_address2 = $this->address_2;
        $shipping->city = $this->city;
        $shipping->state = $this->state;
        $shipping->postcode = $this->postcode;
        $result = $shipping->save();
        if ($result) {
            session()->flash('success', 'shipping Update Success');
            return redirect(route('user.addresses'));
        }
    }
}
