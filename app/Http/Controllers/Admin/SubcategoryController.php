<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index',[
            'subcategories'=>Subcategory::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.add',[
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required'
       ],[
        'name.required'=>'Sub-category name field required',
       ]);

       $subcategory=new Subcategory();
       $subcategory->category_id=$request->category_id;
       $subcategory->name=$request->name;
       $subcategory->save();
       Session::flash('message','Subcategory add successfully!');
       return redirect()->route('subcategories.index');
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
    public function edit($id)
    {
        return view('admin.sub-category.edit',[
            'subcategory'=>Subcategory::find($id),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required'
           ],[
            'name.required'=>'Sub-category name field required',
           ]);

           $subcategory=Subcategory::find($id);
           $subcategory->category_id=$request->category_id;
           $subcategory->name=$request->name;
           $subcategory->save();
           Session::flash('message','Subcategory updated successfully!');
           return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subcategory::find($id)->delete();
        Session::flash('message','Subcategory delete successfully!');
        return redirect()->route('subcategories.index');

    }
}
