<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog-category.index',[
            'blogcats'=>Blogcategory::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
        ],
        [
           'name.required'=>'Category name required.',
        ]);

        $blogcat=new Blogcategory();
        $blogcat->name=$request->name;
        $blogcat->save();
        Session::flash('message','Blog Category add successfully.');
        return redirect()->route('blogscategories.index');
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
        return view('admin.blog-category.edit',[
            'blogcats'=>Blogcategory::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
        ],
        [
           'name.required'=>'Category name required.',
        ]);

        $blogcat=Blogcategory::find($id);
        $blogcat->name=$request->name;
        $blogcat->save();
        Session::flash('message','Blog Category updated successfully.');
        return redirect()->route('blogscategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogcat=Blogcategory::find($id)->delete();
        Session::flash('message','Blog Category deleted successfully.');
        return redirect()->route('blogscategories.index');

    }
}
