<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function main(){
        return view('mainPage');
    }

    public function detail(){
        $arr['products'] = Product::all();
        return view('detailProduct')->with($arr);
    }


}
