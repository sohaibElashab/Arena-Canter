<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ent extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'categorie',
        'star',
        'end',
        'places',
        'date',
        'picture' 
    ];
}
