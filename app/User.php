<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'adress', 
        'phone',
        'city',
        'zip_code',
        'country',
        'fax',
        'company',
        'email',
        'password'
    ];
}
