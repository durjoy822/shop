<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.banner.index',[
            'banners'=>banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create',[
            'products'=>Product::where('status','Public')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
        ],[
            'product_id.required'=>" Banner select field is required ",
        ]);
        $banner=new Banner();
        $banner->product_id=$request->product_id ;
        $banner->save() ;
        Session::flash('message', 'Banner store successfully');
        return redirect()->route('banners.index');

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
        return view('admin.banner.edit',[
            'banner'=>Banner::find($id),
            'products'=>Product::where('status','Public')->get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id'=>'required',
        ],[
            'product_id.required'=>" Banner select field is required ",
        ]);
        $banner=Banner::find($id);
        $banner->product_id=$request->product_id ;
        $banner->save() ;
        Session::flash('message', 'Banner Updated successfully');
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Banner::find($id);
        $category->delete();
        Session::flash('message', 'Banner Delete successfully');
        return redirect()->route('banners.index');
    }
}