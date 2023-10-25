<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    use FileUpload;
    use FileDelete;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand.index',[
            'brands'=>Brand::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $brand=new Brand();
        $brand->name=$request->name;
        if($request->image){
            $brand->image=$this->uploadImage($request->image,'brand');
        }
        $brand->save();
        Session::flash('message','brand Add successfully');
        return redirect()->route('brands.index');
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
         return view('admin.brand.edit',[
            'brand'=>Brand::find($id),
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $brand=Brand::find($id);
        $brand->name=$request->name;
        if($request->file('image')){
            if($request->file('image')){
                if(file_exists($brand->image)){
                    unlink($brand->image);
                }
                $brand->image=$this->uploadImage($request->image,'brand');
            }
        }
        $brand->save();
        Session::flash('message','brand updated successfully');
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand=Brand::find($id);
        $brand->image=$this->deleteImage($brand->image);
        $brand->delete();
        Session::flash('message','Brand Delete successfully!');
        return back(); 
    }
}