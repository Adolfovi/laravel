<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function venta()
    {
        return $this->hasMany(Venta::class, 'client_id')->where('active', 1);
    }


    public function fingerprint()
    {
        return $this->hasMany(Fingerprint::class, 'client_id');
    }

}