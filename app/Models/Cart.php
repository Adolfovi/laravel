<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];


    public function price()
    {
        return $this->belongsTo(Price::class, 'price_id');
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

}