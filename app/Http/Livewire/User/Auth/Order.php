<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\Order as ModelsOrder;
use App\Models\Product;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;
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
        // $ship_address = ShippingAddress::where('user_id', Auth::user()->id)->first();
        $this->first_name = $billing_address->first_name;
        $this->last_name = $billing_address->last_name;
        $this->company_name = $billing_address->company_name;
        $this->country = $billing_address->country;
        $this->address_1 = $billing_address->address_1;
        $this->address_2 = $billing_address->address_2;
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
    }
    public function render()
    {
        $this->total=$this->subtotal=Cart::where('user_id',Auth::user()->id)->sum('total_price');
        $this->carts=Cart::where(['user_id'=>Auth::user()->id])->get();
        return view('livewire.user.auth.order')->layout('layout.user');
    }

    public function showBillingAddress()
    {
        return $this->check
            ? $this->shipping_address = true
            : $this->shipping_address = false;
    }


    public function placeOrder()
    {
        $order=new ModelsOrder();
        $products=Cart::where('user_id', Auth::user()->id)->get();
$ids=[];
        foreach ($products as $product) {
            array_push($ids,$product->pro_id);
        }

        $order->user_id=Auth::user()->id;
        $order->pro_id=json_encode($ids);
        $order->billing_id=$this->billing_id;
        $order->payment_method='instagmoji';
        $order->sub_total=$this->subtotal;
        $order->total=$this->total;
        $result=$order->save();
        if($result){
            session()->flash('success','Order Please Successfully');
            return redirect();
        }

    }
}
