<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'sexe',
        'categorie',
        'couleur', 
        'taille',
        'quantite',
        'pic1',
        'pic2',
        'pic3',
        'pic4',
    ];


}
