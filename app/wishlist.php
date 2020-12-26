<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'product_id'
    ]; 

    public function shopping()
    {
        return $this->hasMany(shopping::class);
    }

    public function user()
    {
        return $this->hasMany(user::class); 
    }

    public function pic($id)
    {
        $pic = shopping::where('id',$id)->get('pic1');
        return $pic[0]['pic1'];
    }
  
    public function name($id)
    {
        $name = shopping::where('id',$id)->get('name');
        return $name[0]['name'];
    }
  
}
