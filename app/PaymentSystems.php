<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSystems extends Model
{
    public $timestamps = false;
    public $fillable = [
        'id',
        'name'
    ];
}
