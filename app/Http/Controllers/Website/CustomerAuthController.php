<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function customerLogin(){
        return view('frontend.auth.login');
    }
    public function customerRegister(){
        return view('frontend.auth.register');
    }
}