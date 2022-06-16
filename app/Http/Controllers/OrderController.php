<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class OrderController
{
    public function getProducts($id){
        $o=Order::find($id);
        $R=$o->products;
//        dd($R);
        return view('orderDetail',["order"=>$o,'products'=>$R]);
    }
}
