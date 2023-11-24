<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart(){
        return view('frontend.cart.cart',[
            'products' => \Cart::getContent(),
        ]);
    }

    public function cartAdd(Request $request, $id){
        $product = Product::find($id);

        // Create an instance of the Cart class
        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->selling_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image'=>$product->image,
                'category'=>$product->category->name,
                'brand'=>$product->brand->name,
            ],
        ]);
        return redirect()->route('cart');
}

    //remove one item form cart

    public function cartDelete($id){
        \Cart::remove($id);
        Session::flash('message','Cart item delete successfully. ');
        return back();
    }

    //remove all item form cart

    public function cartAllRemove(){
        \Cart::clear();
        Session::flash('message','Cart all items delete successfully. ');
        return redirect()->route('home');
    }


    public function cartUpdate(Request $request,  $id){
        \Cart::update($id,[
            'quantity' =>[
                'relative' => false,
                'value' => $request->qty,
            ],
          ]);
        Session::flash('message','Cart  items updated successfully.');
        return back();
    }

}