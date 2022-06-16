<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD

=======
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order');
    }
<<<<<<< HEAD

    public function favorites(){
        return $this->belongsToMany(Favorite::class);
    }

    public function getPriceForCount(){
        if(!is_null($this->pivot)){
            return $this->price * $this->pivot->count;
        }
        else{
            return $this->price;
        }
    }

=======
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
}
