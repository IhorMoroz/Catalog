<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'category';

    public function subCategory(){
        return $this->hasMany('App\UnderCategory', 'category_id');
    }

    public static function getCategory(){
        return DB::table('category')->get();
    }

    public static function addCategory($name, $url)
    {
       return DB::table('category')->insert(['name' => $name, 'url' => $url]);
    }
}
