<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Photo;
use App\Models\Product;
=======
use App\Models\Product;
use App\Models\Photo;
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
use App\Models\User;
use Illuminate\Http\Request;

class MainController
{
    public function home()
    {
<<<<<<< HEAD
        $u = User::get();
        $pr = Product::get();
        $u = User::all();
        $ph = Photo::get();
        return view('home/home', ['products' => $pr, "photos" => $ph, 'users' => $u]);
=======
        $u=User::all();
        return view('home',['users'=>$u]);
    }

    public function catalog()
    {
        return view('catalog');
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
    }

    public function about()
    {
        return view('about');
    }

    public function check_consultation(Request $request)
    {
        $valid = $request->validate([
            'phone' => 'required|size:10'
        ]);
        dd($valid);
    }
}
