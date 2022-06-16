<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FavoriteController
{
    public function favorite()
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $favoriteId = $user_id;
            $ph = Photo::get();
            $favorite = Favorite::find($favoriteId);
            if (is_null($favorite)) {
                $favorite = null;
                $user = null;
                return view('favorite/favorite', ['favorite' => $favorite, "photos" => $ph]);
            } else {
                return view('favorite/favorite', ['favorite' => $favorite, "photos" => $ph]);
            }
        } else {
            $favoriteId=session('favoriteId');
            $ph=Photo::get();
            if(is_null($favoriteId)){
                $favorite=null;
                return view('favorite/favorite',['favorite'=>$favorite,"photos"=>$ph]);
            }
            $favorite=Favorite::find($favoriteId);
            return view('favorite/favorite',['favorite'=>$favorite,"photos"=>$ph]);
        }
    }

    public function favoriteAdd($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $favoriteId = $user_id;
            $favorite = Favorite::find($favoriteId);
            if (!$favorite) {
                $favoriteId = Favorite::create()->insert(['id' => $user_id, 'user_id' => $user_id]);
                $favorite = Favorite::find($favoriteId);
                $favorite->products()->attach($product_id);
            } else {
                $favorite->products()->attach($product_id);
            }
        }
        else{
            $favoriteId= session('favoriteId');
            if(is_null($favoriteId)){
                $favoriteId= Favorite::create()->id;
                session(['favoriteId'=>$favoriteId]);
                $favorite=Favorite::find($favoriteId);
                $favorite->products()->attach($product_id);
            }
            else{
                $favorite=Favorite::find($favoriteId);
                $favorite->products()->attach($product_id);
            }
        }
        return redirect()->route('product', $product_id);
    }

    public function favoriteRemove($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $favoriteId = $user_id;
            $favorite = Favorite::find($favoriteId);
            if (is_null($favorite)) {
                return redirect()->route('favorite');
            } else {
                $favorite->products()->detach($product_id);
                return redirect()->route('favorite');
            }
        }
        else{
            $favoriteId= session('favoriteId');
            if(is_null($favoriteId)){
                return redirect()->route('favorite');
            }
            $favorite=Favorite::find($favoriteId);
            $favorite->products()->detach($product_id);
            return redirect()->route('favorite');
        }
    }

    public function deleteProduct($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $favoriteId = $user_id;
            $favorite = Favorite::find($favoriteId);
            if (is_null($favorite)) {
                return redirect()->route('favorite');
            } else {
                $favorite->products()->detach($product_id);
                return redirect()->route('product', $product_id);
            }
        }
        else {
            $favoriteId = session('favoriteId');
            if (is_null($favoriteId)) {
                return redirect()->route('favorite');
            }
            $favorite = Favorite::find($favoriteId);
            $favorite->products()->detach($product_id);
            return redirect()->route('product', $product_id);
        }
    }

}
