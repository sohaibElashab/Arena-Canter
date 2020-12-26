<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopping;
use App\wishlist;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        wishlist::create([
            'user_id'    => $request->user_id,
            'product_id'    => $request->product_id
        ]);
        return back();
    }

    public function destroy($id)
    {
        $mark = mark::findOrFail($id);
        $mark->delete();

        return back();
    }
}
