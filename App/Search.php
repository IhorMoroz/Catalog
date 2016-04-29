<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Search extends Model
{
    protected $table = 'goods';

    public static function getListUnCategory($category, $uncategory)
    {
         return DB::table('goods')->where([
                                ['category_id', self::getCategoryId($category)],
                                ['un_category_id', self::getUnCategoryId($uncategory)]
                                ])->get();
    }

    public static function getGoodsById($category, $uncategory, $id)
    {
        $result = DB::table('goods')->where([
            ['category_id', self::getCategoryId($category)],
            ['un_category_id', self::getUnCategoryId($uncategory)],
            ['id',$id]
        ])->get();
        if($result) return $result;
        abort(404);
    }

    private static function getCategoryId($name)
    {
        $category = DB::table('category')->where('url', '/'.$name)->first();
        return $category->id;
    }

    private static function getUnCategoryId($name)
    {
        $uncategory = DB::table('undercategory')->where('url', '/'.$name)->first();
        return $uncategory->id;
    }
}
