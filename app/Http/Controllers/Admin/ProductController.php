<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Imagegallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProductService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

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
    public function store(ProductStoreRequest $request,ProductService $productService)
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
    public function update(ProductUpdateRequest $request, $id ,ProductService $productService)
    {
       $productService->update($request,$id);
       Session::flash('message','Product updated successfully');
       return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id,  ProductService $productService)
    {
        $productService->destroy($id);
        Session::flash('message','Product updated successfully');
        return redirect()->route('products.index');


    }
}
