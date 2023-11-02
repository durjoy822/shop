<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Imagegallery;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Unit;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',[
            'products'=>Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.product.add',[
            'categories'=>Category::all(),
            'subCategories'=>Subcategory::all(),
            'units'=>Unit::all(),
            'brands'=>Brand::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request,ProductService $productService)
    {
        // return $request->all();
       $productService->store($request);
       Session::flash('message','Product store successfully');
       return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.show',[
            'product'=>Product::find($id),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit',[
            'product'=>Product::find($id),
            'categories'=>Category::all(),
            'subCategories'=>Subcategory::all(),
            'units'=>Unit::all(),
            'brands'=>Brand::all(),
            'multiple_images'=>Imagegallery::where('product_id',$id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}