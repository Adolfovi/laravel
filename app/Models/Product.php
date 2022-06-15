<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    public function prices()
    {
        return $this->hasMany(Price::class, 'product_id')->where('active', 1)->where('valid', 1);
    }
    
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id')->where('active', 1);
    }


}