<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home',[
            'products' => Product::take(8)->get(),
            'brands' => Brand::all(),
            'blogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
    public function aboutUs(){
        return view('frontend.about-us');
    }
    public function contactUs(){
        return view('frontend.contact-us');
    }
            //------------ product all function ------------

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
    //------------ blog all function ------------

    public function blogList($id){
        return view('frontend.blog.bloglist',[  //blog category wise blog show
            'blogs'=>Blog::where('blog_category_id',$id)->get(),
        ]);
    }
    public function blogDetails($id){
        return view('frontend.blog.blog-details',[
            'blog'=>Blog::find($id), 
        ]);
    }
}