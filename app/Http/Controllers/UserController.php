<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class UserController
{
    public function getOrders($id){
        $R=User::find($id)->orders;
        dd($R);
    }

    public function getData($id){
        $u=User::find($id);
        $R=$u->orders;
        return view('orders',['user'=>$u,'orders'=>$R]);
    }
}
