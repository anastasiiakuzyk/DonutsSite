<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donut;

class DonutController
{
    public function all(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sortDonuts');
        $donuts = [];
        if ($sort === 'PriceUP') {
            $donuts = Donut::getAllByLowestPrice($search);
        } elseif ($sort === 'PriceDOWN') {
            $donuts = Donut::getAllByHighestPrice($search);
        } else {
            $donuts = Donut::where('name', 'like', "%".$search."%")->get();
            $sort = 'Disabled';
        }

        return view('donutsPage', ['donuts' => $donuts, 'selectValue' => $sort]);
    }

    public function get($id)
    {
        $donut = Donut::findOrFail($id);
        if ($donut == null) {
            abort(404);
        }
        return view('donutPage', ['donut' => $donut]);
    }
}
