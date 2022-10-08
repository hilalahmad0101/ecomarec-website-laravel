<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\Order as ModelsOrder;
use App\Models\Product;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Order extends Component
{
    public $shipping_address = false;
    public $check;

    public $payment_method, $subtotal, $total;
    public $billing_address;
    public $ship_address;
    public $first_name, $last_name, $company_name, $country, $address_1, $address_2, $city, $state, $postcode, $phone, $email, $billing_id;

    public $carts;

    public function mount()
    {
        $billing_address = BillingAddress::where('user_id', Auth::user()->id)->first();
        if ($billing_address) {
            // $ship_address = ShippingAddress::where('user_id', Auth::user()->id)->first();
            $this->first_name = $billing_address->first_name;
            $this->last_name = $billing_address->last_name;
            $this->company_name = $billing_address->company_name;
            $this->country = $billing_address->country;
            $this->address_1 = $billing_address->street_address1;
            $this->address_2 = $billing_address->street_address2;
            $this->city = $billing_address->city;
            $this->state = $billing_address->state;
            $this->postcode = $billing_address->postcode;
            $this->phone = $billing_address->phone;
            $this->email = $billing_address->email;
            $this->billing_id = $billing_address->id;
            // $this->first_name = $ship_address->first_name;
            // $this->last_name = $ship_address->last_name;
            // $this->company_name = $ship_address->company_name;
            // $this->country = $ship_address->country;
            // $this->address_1 = $ship_address->address_1;
            // $this->address_2 = $ship_address->address_2;
            // $this->city = $ship_address->city;
            // $this->state = $ship_address->state;
            // $this->postcode = $ship_address->postcode;
            // $this->phone = $ship_address->phone;
            // $this->email = $ship_address->email;
            // $this->billing_id = $ship_address->id;
        } else {
            $this->first_name = "";
            $this->last_name = "";
            $this->company_name = "";
            $this->country = "";
            $this->address_1 = "";
            $this->address_2 = "";
            $this->city = "";
            $this->state = "";
            $this->postcode = "";
            $this->phone = "";
            $this->email = "";
        }
    }
    public function render()
    {
        $this->total = $this->subtotal = Cart::where('user_id', Auth::user()->id)->sum('total_price');
        $this->carts = Cart::where(['user_id' => Auth::user()->id])->get();
        return view('livewire.user.auth.order')->layout('layout.app');
    }

    public function showBillingAddress()
    {
        return $this->check
            ? $this->shipping_address = true
            : $this->shipping_address = false;
    }


    public function placeOrder()
    {
        $order = new ModelsOrder();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $owner_id=0;
        foreach($carts as $c){
            $products=Product::where('owner_id',$c->owner_id)->get();
            foreach($products as $p){
                $owner_id=$p->owner_id;
            }
        }
        $billing = "";
        if ($this->billing_id == null) {
            $billing = new BillingAddress();
        } else {
            $billing = BillingAddress::findOrFail($this->billing_id);
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
        $billing->street_address2 = $this->address_2 ? $this->address_2 : $this->address_1;
        $billing->city = $this->city;
        $billing->state = $this->state;
        $billing->postcode = $this->postcode;
        $billing->phone = $this->phone;
        $billing->email = $this->email;
        $result = $billing->save();
        $ids = [];
        foreach ($carts as $cart) {
            array_push($ids, $cart->pro_id);
        }
        $order->user_id = Auth::user()->id;
        $order->pro_id = json_encode($ids);
        $order->billing_id = $this->billing_id;
        $order->payment_method = 'instagmoji';
        $order->sub_total = $this->subtotal + 10;
        $order->total = $this->total;
        $order->owner_id=$owner_id;
        $result = $order->save();
        if ($result) {
            session()->flash('success', 'Order Please Successfully');
            foreach ($carts as $cart) {
               $cart->delete();
            }
            $this->dispatchBrowserEvent('showCartCount');
            return redirect(route('user.thankyou'));
        }
    }
}
