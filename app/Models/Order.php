<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $fillable=[
        'shipping_id',
        'pro_id',
        'user_id',
        'billing_id',
        'payment_method',
        'sub_total',
        'total'
    ];
}
