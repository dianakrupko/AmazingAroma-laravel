<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Order;
use App\Models\ProductModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

use App\Models\Photo;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function getData($id){
        $products=Product::get();
        $ph=Photo::get();
        $p=Product::find($id);
        $R=$p->photos;
        return view('card/card',['products'=>$products,'otherPhotos'=>$ph,'product'=>$p,'photos'=>$R]);
    }
    public function catalog($count)
    {
        $p = Product::get();
        $ph = Photo::get();
        return view('catalog/catalog',["products" => $p, "photos" => $ph,'count'=>$count]);
    }

    public function getMoreProduct()
    {
        return redirect('catalog/catalog');
    }
    public function getCertificate(){
        $p=Product::get();
        $ph=Photo::get();
        $products=$p->where('certificate');
        return view('certificate/certificate',['products'=>$products,'photos'=>$ph]);
    }

}
