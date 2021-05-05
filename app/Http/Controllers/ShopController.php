<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function all(){

        return view('shops', ['shops'=>Shop::all()]);
    }
    public function get($id)
    {
        $shop = Shop::findOrFail($id);
        if ($shop == null) {
            abort(404);
        }
        return view('shop', ['shop' => $shop]);
    }
}
