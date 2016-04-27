<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AHomeController extends Controller
{
    public  function indexAction()
    {
        $vars = [
            'categoryMenu' => $this->AdminCategory,
            'content' => view('home')
        ];
        return view('index', $vars);
    }
}
