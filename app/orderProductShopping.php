<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderProductShopping extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'type'
    ];

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
  
    public function price($id)
    {
        $price = shopping::where('id',$id)->get('price');
        return $price[0]['price'];
    }
}
