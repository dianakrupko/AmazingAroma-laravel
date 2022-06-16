<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Favorite;
=======
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
use App\Models\Order;
use App\Models\ProductModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

use App\Models\Photo;
use App\Models\Product;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5

class ProductController extends Controller
{

    public function getData($id){
<<<<<<< HEAD
        $products=Product::get();
        $ph=Photo::get();
        $p=Product::find($id);
        $R=$p->photos;
        return view('card/card',['products'=>$products,'otherPhotos'=>$ph,'product'=>$p,'photos'=>$R]);
    }
    public function catalog($count)
=======
        $p=Product::find($id);
        $R=$p->photos;
        return view('card',['product'=>$p,'photos'=>$R]);
    }

    public function getOrders($id){
        $p=Product::find($id);
        $R=$p->orders;
        return view('exampleOrders',["product"=>$p,'orders'=>$R]);
    }














/*-----------------------------------------------------------*/
    public function info_product($id)
>>>>>>> 5ed371f58955403c168b6f3d4fc9d9c5f71704d5
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
