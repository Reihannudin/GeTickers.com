<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetail(){
        return view('main.layout.product');
    }
}
