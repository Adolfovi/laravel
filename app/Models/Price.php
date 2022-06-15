<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function carts()
    {
        return $this->hasOne(Cart::class, 'price_id');
    }

    public function Taxes()
    {
        return $this->belongsTo(Tax::class, 'tax_id')->where('valid', 1);
    }
}