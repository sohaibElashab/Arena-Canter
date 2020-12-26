<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable = [
        'categorie',
        'name',
        'description_short',
        'description',
        'price',
        'energy_value',
        'proteins',
        'carbohidrats',
        'ingredients',  
        'ticket',
        'picture',
        'taille'
    ];
}
