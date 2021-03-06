<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    public $timestamps = false;
    public $fillable = [
        'id',
        'bill_id',
        'amount',
        'bill_status',
        'sending_status',
        'user_id'
    ];
}
