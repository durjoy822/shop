<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

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
            $pdf = PDF::loadHTML('admin.order.download_invoice')
                ->setPaper('a4', 'landscape')
                ->setWarnings(false)
                ->save('myfile.pdf');

            // Instead of saving the PDF, you can use 'stream' directly
            return $pdf->stream();
        }

    // }
    public function orderDelete($id){

    }
}