<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    use FileUpload;
    use FileDelete;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blogs'=>Blog::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add',[
            'blogcats'=>Blogcategory::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'blog_category_id'=>'required',
            'heading'=>'required',
            'content'=>'required',
            'image'=>'nullable',
        ],[
            'blog_category_id.required'=>'Blog category field required.',
            'heading.required'=>'Blog heading required.',
        ]);

        $blog=new Blog();
        $blog->blog_category_id=$request->blog_category_id;
        $blog->heading=$request->heading;
        $blog->content=$request->content;
        $blog->creator="Super Admin";
        if($request->image){
            $blog->image=$this->uploadImage($request->image,'blogs');
        }
        $blog->save();
        Session::flash('message','Blog add successfully.');
        return redirect()->route('blogs.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.blog.show',[
            'blog'=>Blog::find($id), 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit',[
            'blog'=>Blog::find($id),
            'blogcats'=>Blogcategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'blog_category_id'=>'required',
            'heading'=>'required',
            'content'=>'required',
            'image'=>'nullable',
        ],[
            'blog_category_id.required'=>'Blog category field required.',
            'heading.required'=>'Blog heading required.',
        ]);

        $blog=Blog::find($id);
        $blog->blog_category_id=$request->blog_category_id;
        $blog->heading=$request->heading;
        $blog->content=$request->content;
        $blog->creator="Super Admin";
        if($request->file('image')){
            if(file_exists($blog->image)){
                unlink($blog->image);
            }
            $blog->image=$this->uploadImage($request->image,'blogs');
        }


        // if($request->image){
        //     $blog->image=$this->uploadImage($request->image,'blogs');
        // }
        $blog->save();
        Session::flash('message','Blog updated successfully.');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog=Blog::find($id);
        $blog->image=$this->deleteImage($blog->image);
        $blog->delete();
        Session::flash('message','Blog Delete successfully.');
        return back();
    }
}