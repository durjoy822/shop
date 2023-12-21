<?php

namespace App\Http\Controllers\Website;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomerProfile;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function customerProfile(){
        return view('frontend.customerDashboard.profile',[
            'customerProfile'=>CustomerProfile::where('user_id',Auth::guard('customer')->user()->id)->first()
        ]);
    }

    public function customerOrder(){
        return view('frontend.customerDashboard.order');
    }

    public function customerWishlist(){
        return view('frontend.customerDashboard.wishlist',[
            'wishlists'=>Wishlist::where('user_id', Auth::guard('customer')->user()->id)->latest()->paginate(3),

        ]);
    }
    public function customerPassword(){
        return view('frontend.customerDashboard.change_password');
    }
}