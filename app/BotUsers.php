<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotUsers extends Model
{
    public $timestamps = false;
    public $fillable = [
        'id',
        'user_id',
        'username',
        'balance',
        'stars',
        'payment_system',
        'payment_data',
        'refer_id',
        'blocked'
    ];
}
