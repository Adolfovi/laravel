<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id')->where('active', 1);
    }

    public function payment_methods()
    {
        return $this->belongsTo(Payment_Methods::class, 'payment_method_id')->where('active', 1);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'venta_id')->where('active', 1);
    }
}