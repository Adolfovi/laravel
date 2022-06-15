<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_Method extends Model
{
    protected $guarded = [];
    protected $table = 'payment_methods';


    public function venta()
    {
        return $this->hasOne(Venta::class, 'payment_method_id');
    }

}