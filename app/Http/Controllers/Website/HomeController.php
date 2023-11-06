<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function productList(){
        return view('frontend.shoplist');
    }
    public function productDetails(){
        return view('frontend.shop-details');
    }
}