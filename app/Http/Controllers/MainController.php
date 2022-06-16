<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController
{
    public function home()
    {
        $u = User::get();
        $pr = Product::get();
        $u = User::all();
        $ph = Photo::get();
        return view('home/home', ['products' => $pr, "photos" => $ph, 'users' => $u]);
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
