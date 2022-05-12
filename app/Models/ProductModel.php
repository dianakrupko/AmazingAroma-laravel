<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel
{
    use HasFactory;
    public int $id;
    public string $name;
    public string $category;
    public int $count;

    public function __construct($id)
    {
        $data = file_get_contents('../storage/app/public/prod.json');
        $prod_data = json_decode($data, true);
        $this->id = $prod_data.key($id);
        $this->name = $prod_data['name'];
        $this->category = $prod_data['category'];
        $this->count = $prod_data['count'];
    }


}
