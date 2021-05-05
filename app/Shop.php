<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function donuts(){
        return $this->belongsToMany('App\Donut');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
