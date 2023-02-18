<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginAll(){
        return view('auth.layout.login');
    }

    public function signUpAll(){
        return view('auth.layout.signup');
    }
}
