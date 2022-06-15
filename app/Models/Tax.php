<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $guarded = [];
    protected $table = 'taxes';

    public function prices()
    {
        return $this->hasMany(Price::class, 'tax_id');
    }

}