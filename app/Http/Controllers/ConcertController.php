<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function DetailConcert(){
        return view('main.layout.detail.concert');
    }
}
