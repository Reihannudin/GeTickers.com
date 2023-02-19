<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function IndexPage(){
        return view('main.layout.home');
    }

    public function ConcertPage(){
        return view('main.layout.concert');
    }

    public function StorePage(){
        return view('main.layout.store-artist');
    }

}
