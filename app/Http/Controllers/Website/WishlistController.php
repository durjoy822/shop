<?php

namespace App\Http\Controllers\Website;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function wishlist(){
        return view('frontend.wishlist',[
            'wishlists'=>Wishlist::where('user_id', Auth::guard('customer')->user()->id)->get(),
        ]);
    }
    // public function wishlistAdd(Request $request){

    //     $wishlist= new Wishlist() ;
    //     if($wishlist->product_id==$request->product_id){
    //         Session::flash('message','The product already exist on wishlist');
    //         return back();
    //     }else{
    //         $wishlist->product_id = $request->product_id;
    //         if($request->user_id !=''){
    //             $wishlist->user_id = $request->user_id;
    //         }else{
    //             Session::flash('message','Please login first.');
    //             return back();
    //         }
    //         $wishlist->save();
    //         Session::flash('message','Wishlist product added successfully.');
    //         return back();
    //     }

    // }
    public function wishlistAdd(Request $request){
        // Check if the user is logged in
        if(!$request->user_id){
            Session::flash('message', 'Please login first.');
            return back();
        }

        // Check if the product already exists in the user's wishlist
        $existingWishlist = Wishlist::where('user_id', $request->user_id)
                                    ->where('product_id', $request->product_id)
                                    ->first();

        if($existingWishlist){
            Session::flash('message', 'The product already exists in the wishlist.');
            return back();
        }
        // If the product is not in the wishlist, add it
        $wishlist = new Wishlist();
        $wishlist->product_id = $request->product_id;
        $wishlist->user_id = $request->user_id;
        $wishlist->save();

        Session::flash('message', 'Wishlist product added successfully.');
        return back();
    }


    public function wishlistDelete($id){
            $wishlist=Wishlist::find($id);
            $wishlist->delete();
            Session::flash('message','Wishlist product delete successfully.');
            return back();
    }
}