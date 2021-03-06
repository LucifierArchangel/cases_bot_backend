<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraws extends Model
{
    public $timestamps = false;
    public $fillable = [
        'id',
        'amount',
        'payment_system',
        'payment_data',
        'user_id',
        'status',
        'sending_staus'
    ];
}
