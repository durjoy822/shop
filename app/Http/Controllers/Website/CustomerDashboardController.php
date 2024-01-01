<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
use App\Models\Order;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\CustomerProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash as FacadesHash;


class CustomerDashboardController extends Controller
{
    public function customerProfile(){
        return view('frontend.customerDashboard.profile',[
            'customerProfile'=>CustomerProfile::where('customer_id',Auth::guard('customer')->user()->id)->first(),
        ]);
    }

    public function customerOrder(){
        return view('frontend.customerDashboard.order',[
            'customerOrders'=>Order::where('customer_id',Auth::guard('customer')->user()->id)->get(),

        ]);
    }

    public function customerWishlist(){
        return view('frontend.customerDashboard.wishlist',[
            'wishlists'=>Wishlist::where('user_id', Auth::guard('customer')->user()->id)->latest()->paginate(3),

        ]);
    }

    public function customerPassword(){
            return view('frontend.customerDashboard.change_password',[
                'customer' => User::where('role', 'customer')
                ->where('id', Auth::guard('customer')->user()->id)
                ->first(),

            ]);
    }
    public function customerPasswordUpdate(Request $request, $id ){
        // dd($request->all());
        $request->validate([
            'new_password'=>'required',
            'confirm_password'=>'required',
        ]);
        $customer=User::find($id);
        if($request->new_password==$request->confirm_password){
            $customer->password = FacadesHash::make($request->new_password);
        }else{
            Session::flash('message','Enter a right password.');
            return back();
        }
        $customer->save();
        Session::flash('message','Customer password updated successfully.');
        return back();

    }
}