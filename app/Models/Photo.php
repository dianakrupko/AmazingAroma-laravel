<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function prosuct(){
        return $this->belongsTo('App\Models\Product');
    }
}
