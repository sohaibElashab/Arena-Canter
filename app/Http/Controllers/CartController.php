<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\shopping;
use App\ent;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart_page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        if($request->type == 'shopping')
        {$qty=0;
            foreach (Cart::content() as $item) {
                if($item->id == $request->id)
                {
                   $qty = $item->qty + $request->qty;
                }
                else{
                    $qty = $request->qty;
                }
            }
            $produit = shopping::findOrFail($request->id);
            if($produit->quantite >= $qty)
                {
                Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->qty, 'price' => $request->price, 'weight' => 550, 'options' => ['type' => $request->type , 'taille' => $request->taille]]);
                return redirect()->back();    
                }
            else{
                return redirect()->back()->with('unavailable','Quantity unavailable !');    
                }
        }

        if($request->type == 'ent')
        {$qt=0;
            foreach (Cart::content() as $item) {
                if($item->id == $request->id)
                {
                    $qt = $item->qty + $request->qty;                 
                }
                else{
                    $qt = $request->qty;
                }
            }
            $produit = ent::findOrFail($request->id);
            if($produit->places >= $qt)
                {
                Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->qty, 'price' => $request->price, 'weight' => 550, 'options' => ['type' => $request->type , 'taille' => $request->taille]]);
                return redirect()->back();    
                }
            else{
                return redirect()->back()->with('unavailable','Quantity unavailable !');    
                }
        }

        Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->qty, 'price' => $request->price, 'weight' => 550, 'options' => ['type' => $request->type , 'taille' => $request->taille]]);
        return redirect()->back(); 
        
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
