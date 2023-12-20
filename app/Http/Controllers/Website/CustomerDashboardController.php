<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function customerDashboard(){
        return view('frontend.customerDashboard.profile');
    }

    public function customerOrder(){
        return view('frontend.customerDashboard.order');
    }

    public function customerWishlist(){
        return view('frontend.customerDashboard.wishlist');
    }
    public function customerPassword(){
        return view('frontend.customerDashboard.change_password');
    }
}