<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home',[
            'products' => Product::take(8)->get(),
            'brands' => Brand::all(),
        ]);
    }
    public function aboutUs(){
        return view('frontend.about-us');
    }
    public function contactUs(){
        return view('frontend.contact-us');
    }
    public function productList($id){               //category wise product show
        return view('frontend.shoplist',[
            'products'=> Product::where('category_id',$id)->get(),
        ]);
    }
    public function subCategory($id){               //sub category wise product show
        return view('frontend.shoplist',[
            'products'=> Product::where('sub_category_id',$id)->get(),
        ]);
    }
    public function productDetails($id){
        return view('frontend.shop-details',[
            'product'=>Product::find($id),
        ]);
    }
}