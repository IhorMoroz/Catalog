<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Goods extends Model
{
    protected $table = "goods";

    public static function addGoods($art, $name, $desc, $price, $image, $active, $sex_id, $category_id, $un_category_id, $season_id, $brand_id, $mat, $size)
    {
        DB::table('goods')->insert([
                'article' => $art,
                'name' => $name,
                'description' => $desc,
                'price' => $price,
                'image' => $image,
                'active' => $active,
                'sex_id' => $sex_id,
                'category_id' => $category_id,
                'un_category_id' => $un_category_id,
                'season_id' => $season_id,
                'brand_id' => $brand_id,
                'material' => $mat,
                'size' => $size
            ]
        );
    }
}
