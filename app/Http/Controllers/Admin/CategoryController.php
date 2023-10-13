<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\Admin\CategoryService;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index',[
            'categories'=>Category::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request, CategoryService $categoryService)
    {
        $categoryService->store($request);
        Session::flash('message','Category Added Successfully!');
        return redirect()->route('categories.index');
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
        return view('admin.category.edit',[
            'category'=>Category::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id,  CategoryService $categoryService)
    {
        $categoryService->update($request, $id);
        Session::flash('message','Category Update Successfully!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id, categoryService $categoryService)
    {
        $categoryService->delete($id);
        Session::flash('message','Category Delete Successfully!');
        return redirect()->route('categories.index');
    }
}
