<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
   

    public function index($id)
    {
        $orders=Order::findOrFail($id);
        $billingAddress=BillingAddress::findOrFail($orders->billing_id);
        return view('myPDF',['orders' => $orders,'billingAddress'=>$billingAddress]);
    }

    public function generateInvoice($id)
    {
        $orders=Order::findOrFail($id);
        $billingAddress=BillingAddress::findOrFail($orders->billing_id);
        $pdf = PDF::loadView('myPDF',['orders' => $orders,'billingAddress'=>$billingAddress]);
        return $pdf->download('nicesnippets.pdf');
    }
}
