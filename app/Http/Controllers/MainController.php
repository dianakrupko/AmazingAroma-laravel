<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $u=User::all();
        return view('home',['users'=>$u]);
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

    public function form(){
        return view('form_consultation');
    }

    public function check_consultation(Request $request)
    {
        $valid=$request->validate([
            'phone'=>'required|size:10'
        ]);
        dd($valid);
    }

    public function card($id_card){
        return "id: " . $id_card;
    }


}
