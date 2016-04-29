<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ACategoryController extends Controller
{
    public function AddAction()
    {
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('addCategory')
        ];
        return view('index', $vars);
    }

    public function AddCatAction(Request $request){
        $this->validate($request, [
            'addNameCategory' => 'alpha_num|required|max:100|min:3',
            'addUrlCategory' => 'alpha_num|required|max:100',
        ]);
        Category::addCategory($_POST['addNameCategory'], '/'.$_POST['addUrlCategory']);
        return redirect('/admin/category/add');
    }

    public function showListCategoryAction()
    {
        $list = [
            'category' => Category::getCategory()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('listCategory', $list)
        ];
        return view('index', $vars);
    }
}
