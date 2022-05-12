<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    protected static array $products = [1 => ['name' => 'Orange sea', 'image' => '/img/card/im1.png', 'men' => '40%', 'women' => '60%', 'price' => '950грн', 'aroma'=>'бергамот, індійський ананас'], 2 => ['name' => 'Pear black currant', 'image' => '/img/card/im2.png', 'men' => '50%', 'women' => '50%', 'price' => '850грн', 'aroma'=>'смородина, червоне яблуко, дубовий мох, береза']];

    public static function allprod()
    {
        return self::$products;
    }

    public static function get_all_products()
    {
        $data = file_get_contents('../storage/app/public/prod.json');
        $prod_data = json_decode($data);
        return $prod_data;
    }

}
