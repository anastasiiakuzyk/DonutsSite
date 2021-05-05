<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donut extends Model
{
    use HasFactory;

    public function shops() {
        return $this->belongsToMany('App\Shop');
    }

    public static function getAllByLowestPrice($search) {
        return Donut::where('name', 'like', "%".$search."%")->orderBy('price')->get();
    }

    public static function getAllByHighestPrice($search) {
        return Donut::where('name', 'like', "%".$search."%")->orderByDesc('price')->get();
    }
}
