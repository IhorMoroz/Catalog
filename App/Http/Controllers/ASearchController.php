<?php

namespace App\Http\Controllers;

use App\Search;
use App\Seasons;
use App\Sex;
use App\UnderCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class ASearchController extends Controller
{
    public function showListAction($category, $uncategory)
    {
        $search = [
            'list' => Search::getListUnCategory($category, $uncategory),
            'UncategoryName' => UnderCategory::getUnCategoryByUrl($uncategory),
            'url' => "/admin/".$category."/".$uncategory."/"
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('listGoods', $search)
        ];
        return view('index', $vars);
    }

    public function showOneAction($category, $uncategory, $id)
    {
        $search = [
            'goods' => Search::getGoodsById($category, $uncategory, (int)$id),
            'sex' => Sex::getSex(),
            'seasons' => Seasons::getSeasons()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('oneGoods', $search)
        ];
        return view('index', $vars);
    }
}
