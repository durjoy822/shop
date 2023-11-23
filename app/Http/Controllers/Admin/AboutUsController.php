<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutUsController extends Controller
{
    use FileUpload;
    use FileDelete;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about_us.index',[
            'aboutUs'=>AboutUs::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'heading'=>'required',
            'content'=>'required',
        ]);
        $aboutUs=new AboutUs();
        $aboutUs->heading=$request->heading;
        $aboutUs->content=$request->content;
        if($request->image){
            $aboutUs->image=$this->uploadImage($request->image,'about_us');
        }
        $aboutUs->save();
        Session::flash('message','About us add successfully.');
        return redirect()->route('about_us.index');


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
        return view('admin.about_us.edit',[
            'about'=>AboutUs::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'heading'=>'required',
            'content'=>'required',
        ]);
        $aboutUs=AboutUs::find($id);
        $aboutUs->heading=$request->heading;
        $aboutUs->content=$request->content;
        if($request->file('image')){
            if(file_exists($aboutUs->image)){
                unlink($aboutUs->image);
            }

            $aboutUs->image=$this->uploadImage($request->image,'about_us');
        }

        $aboutUs->save();
        Session::flash('message','About us updated successfully.');
        return redirect()->route('about_us.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutUs=AboutUs::find($id);
        $aboutUs->image=$this->deleteImage($aboutUs->image);
        $aboutUs->delete();
        Session::flash('message','About_us Delete successfully!');
        return back();
    }
}