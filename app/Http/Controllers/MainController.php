<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function about()
    {
        return view('about');
    }

    public function favorite()
    {
        return view('favorite');
    }

    public function basket()
    {
        return view('basket');
    }

    public function check_consultation(Request $request)
    {
        $valid=$request->validate([
            'phone'=>'required|size:13'
        ]);
        dd($valid);
    }


}
