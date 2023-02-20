<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function CartAll(){
        return view('main.layout.cart');
    }
}
