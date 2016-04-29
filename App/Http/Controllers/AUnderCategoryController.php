<?php

namespace App\Http\Controllers;

use App\Category;
use App\UnderCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class AUnderCategoryController extends Controller
{
    public function showAddUnCategoryAction()
    {
        $unCategory = [
            'parentCategory' => Category::getCategory()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('addUnCategory', $unCategory)
        ];
        return view('index', $vars);
    }

    public function addUnCategoryAction(Request $request)
    {
        $this->validate($request, [
            'category' => 'integer|required',
            'name' => 'alpha_num|required|max:100|min:3',
            'url' => 'alpha_num|required|max:100',
        ]);
        UnderCategory::addUnCategory($_POST['category'], $_POST['name'], '/'.$_POST['url']);
        return redirect('/admin/uncategory/add');
    }

    public function showListUnCategoryAction()
    {
        $unCategory = [
            'parentCategory' => Category::getCategory(),
            'unCategory' => UnderCategory::getUnCategory()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('listUnCategory', $unCategory)
        ];
        return view('index', $vars);
    }
}
