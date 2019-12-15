<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){
        $arr['products'] = Product::all();
        return view('admin.products.index')->with($arr);
    }
    public function detail($id){
        $pro = Product::find($id);
        echo $pro->product_name;
        echo $pro->price;
        echo $pro->promo;
        echo $pro->description;
        echo $pro->image;
    }
}
