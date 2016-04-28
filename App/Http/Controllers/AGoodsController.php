<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Seasons;
use App\Sex;
use App\UnderCategory;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AGoodsController extends Controller
{
    public function showAddGoodsAction()
    {
        $goods = [
            'unCategory' => UnderCategory::getUnCategory(),
            'seasons' => Seasons::getSeasons(),
            'sex' => Sex::getSex()
        ];
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('addGoods', $goods)
        ];
        return view('index', $vars);
    }

    public function AddGoodsAction(Request $request)
    {
        $this->validate($request, [
            'article' => 'alpha_num|required',
            'name' => 'required|max:100|min:3',
            'description' => 'required|max:600',
            'size' => 'required|max:100',
            'price' => 'integer|required',
            'image' => 'required|image'
        ]);

        if (Input::hasFile('image'))
        {
            $format = $this->getFormatImg();
            $img = Image::make($_FILES['image']['tmp_name']);
            $img->resize(200, 300);
            $nameImg = $this->getNameImg($format);
            $img->save('img/'.$nameImg);
            $category = UnderCategory::getUnCategoryById($_POST['unCategory']);
            Goods::addGoods('#'.$_POST['article'],
                $_POST['name'],
                $_POST['description'],
                $_POST['price'],
                $nameImg,
                $_POST['active'],
                $_POST['sex'],
                $category->category_id,
                $_POST['unCategory'],
                $_POST['seasons'],
                '',//$_POST['brand'],
                '',//$_POST['material'],
                $_POST['size']
            );
            Session::flash('success', 'Upload successfully');
            return redirect('/admin/goods/add');
        }
    }

    private function getFormatImg()
    {
        $format = null;
        switch($_FILES['image']['type']){
            case "image/jpeg":
                $format = ".jpg";
                break;
            case "image/png":
                $format = ".png";
                break;
        }
        return $format;
    }

    private function getNameImg($format)
    {
        $dir = '/img';
        do {
            $filename = str_random(30).$format;
        } while (File::exists(public_path().$dir.$filename));
        return $filename;
    }
}
