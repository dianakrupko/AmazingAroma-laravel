<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

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
