<?php

namespace App\Http\Controllers;

use App\ent;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EntController extends Controller
{
    public function index()
    {
        $day1=Carbon::now()->toDateString();
        $day2=Carbon::now()->addDays(1)->toDateString();
        $day3=Carbon::now()->addDays(2)->toDateString();
        $show = ent::where('categorie','event')->first();
        if($show){
            $events = ent::where('categorie','event')->where('id','!=',$show->id)->get();
        }
        $movies1= ent::where('categorie','movie')->where('date',$day1)->get();
        $movies2= ent::where('categorie','movie')->where('date',$day2)->get();
        $movies3= ent::where('categorie','movie')->where('date',$day3)->get();
        $activity = DB::table('ents')->where('categorie','activity')->get()->toArray();
        return view('Ent.home',compact('events','show','movies1','movies2','movies3','activity'));
    }

    public function show($id)
    {
        $others=ent::where('categorie','event')->paginate(3);
        $produit = ent::where('id',$id)->first();
        return view('Ent.product',compact('produit','others'));
    }

    public function destroy($id)
    {
        $product = ent::findOrFail($id);
        $product->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required',
            'description'       => 'required',
            'price'       => 'required',
            'categorie'       => 'required',
            'star'       => 'required',
            'end'       => 'required',
            'number'       => 'required',
            'date'       => 'required',
            'picture'       => 'required|file|image'
        ]);

        $image = $request->file('picture');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/imgENT'),$new_name);

        $ent = ent::findOrFail($id);

        $ent->update([
            'name'       => $request->name,
            'description'       => $request->description,
            'price'       => $request->price,
            'categorie'       => $request->categorie,
            'star'       => $request->star,
            'end'       => $request->end,
            'places'       => $request->number,
            'date'       => $request->date,
            'picture'       => $new_name
        ]);

        return redirect()->route('admin.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'description'       => 'required',
            'price'       => 'required',
            'categorie'       => 'required',
            'star'       => 'required',
            'end'       => 'required',
            'number'       => 'required',
            'date'       => 'required',
            'picture'       => 'required|file|image'
        ]);

        $image = $request->file('picture');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/imgENT'),$new_name);

        ent::create([
            'name'       => $request->name,
            'description'       => $request->description,
            'price'       => $request->price,
            'categorie'       => $request->categorie,
            'star'       => $request->star,
            'end'       => $request->end,
            'places'       => $request->number,
            'date'       => $request->date,
            'picture'       => $new_name
        ]);
        return redirect()->route('admin.index');
    }
}
