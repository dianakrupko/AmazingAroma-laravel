<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order');
    }
}
