<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table='carts';
    protected $fillable=[
        'user_id',
        'pro_id',
        'qty',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'pro_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
