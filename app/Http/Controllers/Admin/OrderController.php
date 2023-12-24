<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIndex(){
        return view('admin.order.index',[
            'orders'=>Order::latest()->get(),
        ]);
    }
    public function orderDetails($id){
        return view('admin.order.details',[
            'order'=>Order::find($id),
        ]);
    }
    public function orderEdit($id){
        return view('admin.order.edit',[
            'orderEdit'=>Order::find($id),
        ]);
    }
    public function orderInvoice($id){
        return view('admin.order.view-invoice',[
            // dd(Order::find($id)),
            'order'=>Order::find($id),
        ]);
    }
    public function invoiceDownload($id){
        return view('admin.order.index',[
            'orders'=>Order::latest()->get(),
        ]);
    }
    public function orderDelete($id){

    }
}