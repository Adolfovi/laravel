<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    public function price()
    {
        return $this->hasMany(Price::class, 'product_id');
    }
    
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }


}