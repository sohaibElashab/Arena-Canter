<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopping;

class ShoppingController extends Controller
{
    public function index()
    {
        $products=shopping::paginate(8);
        return view('shopping.home',compact('products'));
    }

    public function grid()
    {
        $products = shopping::where('sexe','women')->get();
        return view('shopping.grid',compact('products'));
    }

    public function show($id)
    {
        $product = shopping::where('id',$id)->first();
        $sizes = shopping::distinct()->where('name',$product->name)->get('taille');
        $others = shopping::where('categorie', $product->categorie)->paginate(4);
        return view('shopping.product',compact('product','sizes','others'));
    }

    public function filter(Request $request)
    {
        $sexe = $request->query('sexe');
        $categorie = $request->query('categorie');
        $price1 = substr($request->query('price1'),1);
        $price2 = substr($request->query('price2'),1);
        $color = $request->query('color');
        $size = $request->query('size');
        $products = shopping::where('sexe',$sexe)->where('categorie',$categorie)->get();


        if($price1)
        {
            $products = shopping::where('sexe',$sexe)->where('categorie',$categorie)
            ->whereBetween('price',array($price1,$price2))
            ->get();
        }
        
        if($color)
        {
            $products = shopping::where('sexe',$sexe)->where('categorie',$categorie)
            ->whereBetween('price',array($price1,$price2))->where('couleur',$color)
            ->get();
        }

        if($size)
        {
            $products = shopping::where('sexe',$sexe)->where('categorie',$categorie)
            ->whereBetween('price',array($price1,$price2))->where('taille',$size)
            ->get();
        }

        if($size && $color)
        {
            $products = shopping::where('sexe',$sexe)->where('categorie',$categorie)
            ->whereBetween('price',array($price1,$price2))->where('taille',$size)->where('couleur',$color)
            ->get();
        }

        return view('shopping.grid',compact('products'));
    }

    
    public function destroy($id)
    {
        $product = shopping::findOrFail($id);
        $product->delete();

        return back();
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'name'       => 'required',
            'price'       => 'required',
            'description'       => 'required',
            'sexe'       => 'required',
            'categorie'       => 'required',
            'couleur'       => 'required',
            'taille'       => 'required',
            'quantite'       => 'required',
            'pic1'       => 'required|file|image',
            'pic2'       => 'required|file|image',
            'pic3'       => 'required|file|image',
            'pic4'       => 'required|file|image'
        ]);

        $image1 = $request->file('pic1');
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('images/imgSHOPPING/products'),$new_name1);

        $image2 = $request->file('pic2');
        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('images/imgSHOPPING/products'),$new_name2);

        $image3 = $request->file('pic3');
        $new_name3 = rand() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('images/imgSHOPPING/products'),$new_name3);

        $image4 = $request->file('pic4');
        $new_name4 = rand() . '.' . $image4->getClientOriginalExtension();
        $image4->move(public_path('images/imgSHOPPING/products'),$new_name4);

        $shop = shopping::findOrFail($id);

        $shop->update([
            'name'       => $request->name,
            'price'       => $request->price,
            'description'       => $request->description,
            'sexe'       => $request->sexe,
            'categorie'       => $request->categorie,
            'couleur'       => $request->couleur,
            'taille'       => $request->taille,
            'quantite'       => $request->quantite,
            'pic1'       => $new_name1,
            'pic2'       => $new_name2,
            'pic3'       => $new_name3,
            'pic4'       => $new_name4
        ]);

        return redirect()->route('admin.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'price'       => 'required',
            'description'       => 'required',
            'sexe'       => 'required',
            'categorie'       => 'required',
            'quantite'       => 'required',
            'pic1'       => 'required|file|image',
            'pic2'       => 'required|file|image',
            'pic3'       => 'required|file|image',
            'pic4'       => 'required|file|image'
        ]);

        $image1 = $request->file('pic1');
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('images/imgSHOPPING/products'),$new_name1);

        $image2 = $request->file('pic2');
        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('images/imgSHOPPING/products'),$new_name2);

        $image3 = $request->file('pic3');
        $new_name3 = rand() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('images/imgSHOPPING/products'),$new_name3);

        $image4 = $request->file('pic4');
        $new_name4 = rand() . '.' . $image4->getClientOriginalExtension();
        $image4->move(public_path('images/imgSHOPPING/products'),$new_name4);

        if($request->Small)
        {
            if($request->Black)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Black',
                    'taille'       => 'Small',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->White)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'White',
                    'taille'       => 'Small',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Red)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Red',
                    'taille'       => 'Small',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Blue)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Blue',
                    'taille'       => 'Small',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Orange)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Orange',
                    'taille'       => 'Small',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
        }
        if($request->Medium)
        {
            if($request->Black)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Black',
                    'taille'       => 'Medium',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->White)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'White',
                    'taille'       => 'Medium',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Red)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Red',
                    'taille'       => 'Medium',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Blue)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Blue',
                    'taille'       => 'Medium',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Orange)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Orange',
                    'taille'       => 'Medium',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
        }
        if($request->Large)
        {
            if($request->Black)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Black',
                    'taille'       => 'Large',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->White)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'White',
                    'taille'       => 'Large',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Red)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Red',
                    'taille'       => 'Large',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Blue)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Blue',
                    'taille'       => 'Large',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
            if($request->Orange)
            {
                shopping::create([
                    'name'       => $request->name,
                    'price'       => $request->price,
                    'description'       => $request->description,
                    'sexe'       => $request->sexe,
                    'categorie'       => $request->categorie,
                    'couleur'       => 'Orange',
                    'taille'       => 'Large',
                    'quantite'       => $request->quantite,
                    'pic1'       => $new_name1,
                    'pic2'       => $new_name2,
                    'pic3'       => $new_name3,
                    'pic4'       => $new_name4
                ]);
            }
        }


        return redirect()->route('admin.index');
    }

    public function tailleFilter(Request $request)
    {
        $id = shopping::where('name',$request->name)->where('taille',$request->taille)->where('couleur',$request->couleur)->first('id');
        return $this->show($id->id);
    }
 
}
