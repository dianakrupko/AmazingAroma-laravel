<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
