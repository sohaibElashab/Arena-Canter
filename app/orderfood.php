<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderfood extends Model
{
    protected $fillable = [
        'user_id',
        'state',
        'track_number'
    ];
}
