<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function payment_methods()
    {
        return $this->belongsTo(Payment_Methods::class, 'payment_method_id');
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class, 'venta_id');
    }
}