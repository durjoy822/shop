<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIndex(){
        return view('admin.order.index',[
            'orders'=>Order::latest()->get(), 
        ]);
    }
}