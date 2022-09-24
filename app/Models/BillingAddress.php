<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;

    protected $table = 'billing_addresses';
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'country',
        'street_address1',
        'street_address2',
        'city',
        'state',
        'postcode',
        'phone',
        'email',
    ];
}
