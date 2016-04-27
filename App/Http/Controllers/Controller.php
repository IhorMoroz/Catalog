<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $Menu = [];
    protected $AdminCategory = [];

    public function __construct()
    {
        $this->MainMenuFillOther();
        $this->MainMenuFillCategory();
    }

    private function MainMenuFillCategory()
    {
        foreach(Category::getCategory() as $item){
            $subMenu[$item->id] = Category::find($item->id)->subCategory->toArray();
            $names = [];
            foreach($subMenu[$item->id] as $sub){
                $names[$sub['id']][] = $sub['name'];
                $names[$sub['id']][] = $item->url . $sub['url'];
            }
            $this->Menu[$item->name] = $names;
            $this->AdminCategory[$item->name] = $names;
        }
    }

    private function MainMenuFillOther()
    {
        $this->Menu['Главная'] = 0;
    }
}
