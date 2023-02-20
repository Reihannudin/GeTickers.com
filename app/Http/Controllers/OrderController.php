<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderAll(){
        return view('main.layout.order');
    }

    public function OrderHistory()
    {
        return view('main.component.order.order-history');
    }

    public function OrderReturn()
    {
        return view('main.component.order.order-return');
    }

}
