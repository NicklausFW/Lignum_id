<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App;
use PDF;
class PDFMaker extends Controller
{

    public function gen()
    {
    	$data = Product::all();
    	$pdf = PDF::loadview('product_pdf',['products'=>$data]);
        return $pdf->download('laporan-product-pdf');
        
    }
   
}
