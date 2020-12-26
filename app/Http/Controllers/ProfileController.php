<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use App\orderent;
use App\orderfood;
use App\ordershopping;
use App\orderProductShopping;
use App\orderProductFood;
use App\orderProductEnt;
use Auth;
use App\wishlist;
use DB;
use Hash;
use App\ent;
use PDF;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $wishlist = wishlist::where('user_id',$id)->distinct()->get('product_id');

        $shops = orderProductShopping::select('ordershoppings.track_number','ordershoppings.state','order_product_shoppings.*')
        ->join('ordershoppings','ordershoppings.id','=','order_product_shoppings.order_id')
        ->where('ordershoppings.user_id',$id)->get();
       
        $foods = orderProductFood::select('orderfoods.track_number','orderfoods.state','order_product_foods.*')
        ->join('orderfoods','orderfoods.id','=','order_product_foods.order_id')
        ->where('orderfoods.user_id',$id)->get();
       
        $ents = orderProductEnt::select('order_product_ents.*')
        ->join('orderents','orderents.id','=','order_product_ents.order_id')
        ->where('orderents.user_id',$id)->get();

        return view('profile',compact('wishlist','shops','foods','ents'));
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'adress'=> 'required', 
            'phone'=> 'required|numeric|digits:10',
            'zip_code'=> 'required|numeric|digits:4',
            'email'=> 'required|email'
        ]);
        
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        
        $user->update([
            'username'       => $request->username,
            'first_name'       => $request->first_name,
            'last_name'       => $request->last_name,
            'adress'       => $request->adress,
            'phone'       => $request->phone,
            'zip_code'       => $request->zip_code,
            'email'       => $request->email
        ]);

        return redirect()->route('profile.index');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'old' => 'required',
            'password'=> 'required|confirmed'
        ]);

        
        if(Hash::check($request->old,Auth::user()->password)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMSG','Password changed successfully !');
        }
        else{
            return redirect()->back()->with('errorMSG','Old password invalid !');
        }
    }

    public function pdf(Request $request)
    {
        $qty = $request->qty;
        $item = ent::findOrFail($request->id);
        $pdf=PDF::loadView('pdf',['item' => $item , 'qty' => $qty]);
        return $pdf->download('ticket.pdf');
    }
}
