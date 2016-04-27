<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AGoodsController extends Controller
{
    public function showAddGoodsAction()
    {
        $goods = [
//            'parentCategory' => Category::getCategory()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('addGoods', $goods)
        ];
        return view('index', $vars);
    }
}
