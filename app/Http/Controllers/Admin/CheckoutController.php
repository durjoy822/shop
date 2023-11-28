<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('frontend.cart.checkout',[
            'customerDetails' => User::where('id', Auth::guard('customer')->user()->id)->first(),
        ]);
    }

    public function confirmOrder(Request $request){
    // return $request->all();
        $customer=new Customer();
        $customer->customer_id=$request->customer_id;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile=$request->mobile;
        $customer->nid=$request->nid;
        $customer->state=$request->state;
        $customer->address=$request->address;
        $customer->save();
        return back();
    }
}