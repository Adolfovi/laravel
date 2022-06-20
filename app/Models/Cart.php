<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];


    public function price()
    {
        return $this->belongsTo(Price::class)->where('active', 1)->where('valid', 1);
    }

    public function fingerprint()
    {
        return $this->belongsTo(Fingerprint::class, 'fingerprint_id');
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