<?php

namespace App\Http\Controllers;

use App\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $burgers = food::where('categorie','Burgers')->where('taille','Big')->get();
        $toasts = food::where('categorie','Toasts')->where('taille','Big')->get();
        $pizzas = food::where('categorie','Pizzas')->where('taille','Big')->get();
        $salads = food::where('categorie','Salads')->where('taille','Big')->get();
        $drinks = food::where('categorie','Drinks')->where('taille','Big')->get();
        $desserts = food::where('categorie','Desserts')->where('taille','Big')->get();
        return view('food.home',compact('burgers','toasts','pizzas','salads','drinks','desserts'));
    }

    public function show($id)
    {
        $produit = food::where('id',$id)->first();
        $mini = food::where('name',$produit->name)->where('taille','Small')->first();
        $big = food::where('name',$produit->name)->where('taille','Big')->first();
        return view('food.product',compact('produit','big','mini'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required',
            'categorie'       => 'required',
            'ingredients'       => 'required',
            'big_price'       => 'required',
            'big_energy_value'       => 'required',
            'big_proteins'       => 'required',
            'big_carbohidrats'       => 'required',
            'mini_price'       => 'required',
            'mini_energy_value'       => 'required',
            'mini_proteins'       => 'required',
            'mini_carbohidrats'       => 'required',
            'ticket'       => 'required',
            'description_short'       => 'required',
            'description'       => 'required',
            'picture'       => 'required|file|image'
        ]);

        $image = $request->file('picture');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/imagesFOOD'),$new_name);

        $food = food::findOrFail($id);

        $big = food::where('name',$food->name)->where('taille','Big')->first();
        $mini = food::where('name',$food->name)->where('taille','Small')->first();

        $big->update([
            'categorie'    => $request->categorie,
            'name'    => $request->name,
            'description_short'    => $request->description_short,
            'description'    => $request->description,
            'price'    => $request->big_price,
            'energy_value'    => $request->big_energy_value,
            'proteins'    => $request->big_proteins,
            'carbohidrats'    => $request->mini_carbohidrats,
            'ingredients'    => $request->ingredients,
            'ticket'    => $request->ticket,
            'picture'    => $new_name,
            'taille'    =>'Big'
        ]);

        $mini->update([
            'categorie'    => $request->categorie,
            'name'    => $request->name,
            'description_short'    => $request->description_short,
            'description'    => $request->description,
            'price'    => $request->mini_price,
            'energy_value'    => $request->mini_energy_value,
            'proteins'    => $request->mini_proteins,
            'carbohidrats'    => $request->mini_carbohidrats,
            'ingredients'    => $request->ingredients,
            'ticket'    => $request->ticket,
            'picture'    => $new_name,
            'taille'    =>'Small'
        ]);

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $food = food::findOrFail($id);
        $big = food::where('name',$food->name)->where('taille','Big')->first();
        $mini = food::where('name',$food->name)->where('taille','Small')->first();
        $big->delete();
        $mini->delete();

        return back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'categorie'       => 'required',
            'ingredients'       => 'required',
            'big_price'       => 'required',
            'big_energy_value'       => 'required',
            'big_proteins'       => 'required',
            'big_carbohidrats'       => 'required',
            'mini_price'       => 'required',
            'mini_energy_value'       => 'required',
            'mini_proteins'       => 'required',
            'mini_carbohidrats'       => 'required',
            'ticket'       => 'required',
            'description_short'       => 'required',
            'description'       => 'required',
            'picture'       => 'required|file|image'
        ]);

        $image = $request->file('picture');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/imagesFOOD'),$new_name);

        food::create([
            'categorie'    => $request->categorie,
            'name'    => $request->name,
            'description_short'    => $request->description_short,
            'description'    => $request->description,
            'price'    => $request->big_price,
            'energy_value'    => $request->big_energy_value,
            'proteins'    => $request->big_proteins,
            'carbohidrats'    => $request->mini_carbohidrats,
            'ingredients'    => $request->ingredients,
            'ticket'    => $request->ticket,
            'picture'    => $new_name,
            'taille'    =>'Big'
        ]);

        food::create([
            'categorie'    => $request->categorie,
            'name'    => $request->name,
            'description_short'    => $request->description_short,
            'description'    => $request->description,
            'price'    => $request->mini_price,
            'energy_value'    => $request->mini_energy_value,
            'proteins'    => $request->mini_proteins,
            'carbohidrats'    => $request->mini_carbohidrats,
            'ingredients'    => $request->ingredients,
            'ticket'    => $request->ticket,
            'picture'    => $new_name,
            'taille'    =>'Small'
        ]);
        return redirect()->route('admin.index');
    }

}
