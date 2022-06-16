<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
<<<<<<< HEAD
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getTotalPrice(){
        $sum=0;
        foreach ($this->products as $product){
            $sum+=$product->getPriceForCount();
        }
        return $sum;
=======
        return $this->belongsTo('App\Models\User');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Product');
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
    }
}
