<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ProfileAll(){
        return view('main.layout.profile');
    }
}
