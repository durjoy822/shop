<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function customerDashboard(){
        return view('frontend.customerDashboard.index'); 
    }
}