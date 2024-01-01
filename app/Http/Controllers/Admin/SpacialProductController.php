<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SpacialProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpacialProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.spacial-product.index',[
            'spacialProducts'=>SpacialProduct::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.spacial-product.create',[
            'products'=>Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'selling_price'=>'required',
            'starting_time'=>'required',
            'ending_time'=>'required',
        ]);

        $spacialProduct=new SpacialProduct();
        $spacialProduct->offer_name=$request->offer_name;
        $spacialProduct->product_id=$request->product_id;
        $spacialProduct->selling_price=$request->selling_price;
        $spacialProduct->starting_time=$request->starting_time;
        $spacialProduct->ending_time=$request->ending_time;
        $spacialProduct->status=$request->status;
        $spacialProduct->save();
        Session::flash('message','Spacial product added successfully');
        return redirect()->route('spacial_products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.spacial-product.edit',[
            'spacial_product'=>SpacialProduct::find($id),
            // dd(Product::find($id)),
            'products'=>Product::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'selling_price'=>'required',
            'starting_time'=>'required',
            'ending_time'=>'required',
        ]);

        $spacialProduct=SpacialProduct::find($id);
        $spacialProduct->offer_name=$request->offer_name;
        $spacialProduct->product_id=$request->product_id;
        $spacialProduct->selling_price=$request->selling_price;
        $spacialProduct->starting_time=$request->starting_time;
        $spacialProduct->ending_time=$request->ending_time;
        $spacialProduct->status=$request->status;
        $spacialProduct->save();
        Session::flash('message','Spacial product updated successfully');
        return redirect()->route('spacial_products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SpacialProduct::find($id)->delete();
        Session::flash('message','Spacial product deleted successfully');
        return back();
    }
}