<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
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
    }
}
