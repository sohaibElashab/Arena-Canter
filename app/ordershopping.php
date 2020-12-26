<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordershopping extends Model
{
    protected $fillable = [
        'user_id',
        'state',
        'track_number'
    ];
}
