<?php

namespace App\Http\Controllers\Website;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request){
        return view('frontend.search-product.search',[
            'products'=> Product::where('name','like','%'.$request->search.'%')->where('status','Public')->latest()->paginate(10), //for search
            'brands'=>Brand::all(),
        ]);
    }

    // top navbar search all category wise product
    public function categoryProduct(Request $request){
        $products = Product::where('name', 'like', '%' . $request->search . '%')->where('status','Public');
        if ($request->category != 'all') {
            $products->where('category_id', $request->category);
        }
        $products = $products->paginate(10);
        return view('frontend.search-product.search', [
            'products' => $products,
            'brands'=>Brand::all(),
        ]);
    }

}