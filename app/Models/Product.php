<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
       'product_title',
       'sale_price',
       'status',
       'price',
       'small_content',
       'items',
       'categories',
       'long_content',
       'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function owners()
    {
        return $this->belongsTo(Vendor::class,'owner_id');
    }


    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function getImageAttribute($value)
    {
        return url('/')."/storage/".$value;
    }

    
}
