<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function log(){
        return view('auth.login');
    }
    public function index()
    {
        $user = Auth::user();
        $R = $user->orders;
        $user_id = $user->id;
        $favoriteId = $user_id;
        $ph = Photo::get();
        $favorite = Favorite::find($favoriteId);
        if (is_null($favorite)) {
            $favorite = null;
        }
        return view('auth.userPage', ['user' => $user, 'orders' => $R, 'favorite' => $favorite, "photos" => $ph]);
    }







}
