<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

use App\Models\Photo;
use App\Models\Product;

class ProductController extends Controller
{

    public function getData($id){
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
    {
        $product = new ProductsModel();
        return view('product', ['obj' => $product->allprod()[$id]]);
    }

    public function getProductjson()
    {
        $dataprod = ProductsModel::get_all_products();
        return $dataprod;
    }


}
