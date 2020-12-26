<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\food;
use App\ent;
use App\shopping;
use App\orderent;
use App\orderfood;
use App\ordershopping;
use App\orderProductShopping;
use App\orderProductFood;
use App\orderProductEnt;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {      
        $categories = food::distinct()->get('categorie');
        $entcategories = ent::distinct()->get('categorie');
        $products = food::get();
        $ents = ent::get();
        $shops = shopping::get();
        $shopcategories = shopping::distinct()->get('categorie');
        return view('admin.index',compact('products','categories','ents','entcategories','shops','shopcategories'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function edit($id)
    {   $big=$mini=$ent=$shop=null;
        if(Auth::guard('admin')->user()->type == 'food')
        {
            $produit = food::findOrFail($id);
            $mini = food::where('name',$produit->name)->where('taille','Small')->first();
            $big = food::where('name',$produit->name)->where('taille','Big')->first();        
        }
        if(Auth::guard('admin')->user()->type == 'ent')
        {
            $ent = ent::findOrFail($id);
        }
     
        if(Auth::guard('admin')->user()->type == 'shopping')
        {
            $shop = shopping::findOrFail($id);
        }
        
        return view('admin.edit',compact('big','mini','ent','shop'));
    }

    public function foodFilter(Request $request)
    {
        $categories = food::distinct()->get('categorie');
        $products = food::where('categorie',$request->categorie)->get();
        return view('admin.index',compact('products','categories'));
    }

    public function entFilter(Request $request)
    {
        $entcategories = ent::distinct()->get('categorie');
        $ents = ent::where('categorie',$request->categorie)->get();
        return view('admin.index',compact('ents','entcategories'));
    }

    public function shopFilter(Request $request)
    {
        $shopcategories = shopping::distinct()->get('categorie');
        $shops = shopping::where('categorie',$request->categorie)->get();
        return view('admin.index',compact('shops','shopcategories'));
    }

    public function orders()
    {
        $food=$ent=$shop=null;
        if(Auth::guard('admin')->user()->type == 'food')
        {
            $food = orderfood::get();        
        }

        if(Auth::guard('admin')->user()->type == 'ent')
        {
            $ent = orderent::get();
        }
     
        if(Auth::guard('admin')->user()->type == 'shopping')
        {
            $shop = ordershopping::get();
        }
        
        return view('admin.orders',compact('food','ent','shop'));
    }

    public function orderEdit($id)
    {
        $food=$shop=null;
        if(Auth::guard('admin')->user()->type == 'food')
        {
            $food = orderfood::findOrFail($id);       
        }

        if(Auth::guard('admin')->user()->type == 'ent')
        {
           return redirect()->back();   
        }
     
        if(Auth::guard('admin')->user()->type == 'shopping')
        {
            $shop = ordershopping::findOrFail($id);   
        }

        return view('admin.orderEdit',compact('food','shop'));
    }

    public function details($id)
    {
        $food=$ent=$shop=null;
        if(Auth::guard('admin')->user()->type == 'food')
        {
            $food = orderProductFood::where('order_id',$id)->get();        
        }

        if(Auth::guard('admin')->user()->type == 'ent')
        {
            $ent = orderProductEnt::where('order_id',$id)->get();   
        }
     
        if(Auth::guard('admin')->user()->type == 'shopping')
        {
            $shop = orderProductShopping::where('order_id',$id)->get();   
        }

        return view('admin.details',compact('food','ent','shop'));
    }

    public function orderUpdate(Request $request)
    {
        $request->validate([
            'state' => 'required',
            'track_number' => 'required'
        ]);

        if(Auth::guard('admin')->user()->type == 'food')
        {
            $food = orderfood::findOrFail($request->id);
            $food->update([
                'state' => $request->state,
                'track_number' => $request->track_number
            ]);
        }
     
        if(Auth::guard('admin')->user()->type == 'shopping')
        {
            $shop = ordershopping::findOrFail($request->id);
            $shop->update([
                'state' => $request->state,
                'track_number' => $request->track_number
            ]);
        }

        return redirect()->route('admin.orders');
    }
}
