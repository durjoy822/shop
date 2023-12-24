<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('frontend.cart.checkout',[
            'customerDetails' => User::where('id', Auth::guard('customer')->user()->id)->first(),
            // 'customer' => Customer::where('user_i?d', Auth::guard('customer')->user()->id)->first(),
        ]);
    }

    public function confirmOrder(Request $request){
        // return $request->all();
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'nid'=>'required',
            'state'=>'required',
            'delivery_address'=>'required',
        ]);

        $customer=new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile=$request->phone;
        $customer->nid=$request->nid;
        $customer->state=$request->state;
        $customer->address=$request->delivery_address;
        $customer->save();


        $order=new Order();
        $order->customer_id=$customer->id;
        $order->customer_id=$customer->id;

        $order->order_total=Session::get('totalPayable');
        $order->tax_total=Session::get('tax');
        $order->shipping_total=Session::get('shipping');
        $order->order_date=date('Y-m-d');
        $order->order_timestamp=strtotime(date('Y-m-d'));
        $order->order_status='pending';
        $order->payment_type=$request->payment_method;
        $order->delivery_address=$request->delivery_address;
        $order->save();


        foreach(Cart::getContent() as $item){
            $orderDetails=new OrderDetail();
            $orderDetails->order_id     =$order->id;
            $orderDetails->product_id   =$item->id;
            $orderDetails->product_name   =$item->name;
            $orderDetails->product_price   =$item->price;
            $orderDetails->product_qty   =$item->quantity;
            $orderDetails->save();
        }
        foreach(Cart::getContent() as $item){
            Cart::remove($item->id);
        }

        Session::forget('totalPayable');
        Session::forget('shipping');
        Session::forget('tax');


        Session::flash('complete','Congratulations Your order completed successfully.We are contract with you as soon as possible. Thank you.  ');
        return redirect()->route('complete.order');
    }

    public function completeOrder(){
        return view('frontend.cart.orderComplete');
    }
}
