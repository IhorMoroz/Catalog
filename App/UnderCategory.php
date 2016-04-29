<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UnderCategory extends Model
{
    protected $table = 'undercategory';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public static function getUnCategory()
    {
        return DB::table('undercategory')->get();
    }

    public static function getUnCategoryById($id)
    {
        return DB::table('undercategory')->where('id',$id)->first();
    }

    public static function getUnCategoryByUrl($url)
    {
        return DB::table('undercategory')->where('url', '/'.$url)->first();
    }

    public static function addUnCategory($id, $name, $url)
    {
        DB::table('undercategory')->insert(
            ['category_id' => $id, 'name' => $name, 'url' => $url]
        );
    }
}
