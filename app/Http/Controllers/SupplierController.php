<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierController
{
    public function all()
    {
        $suppliers = Supplier::all();

        return view('suppliers', ['suppliers' => $suppliers]);
    }

    public function get($id)
    {
        $supplier = Supplier::findOrFail($id);
        if ($supplier == null) {
            abort(404);
        }
        return view('supplier', ['supplier' => $supplier]);
    }

}
