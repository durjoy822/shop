<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.review.index',[
            'reviews'=>Review::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'customer_name'=>'required',
            'customer_email'=>'required',
            'rating'=>'required',
            'review'=>'required',
        ]);
        $review=new Review();
        $review->product_id= $request->product_id;
        $review->customer_id= $request->customer_id;
        $review->customer_name= $request->customer_name;
        $review->customer_email= $request->customer_email;
        $review->rating= $request->rating;
        $review->review= $request->review;
        $review->save();
        return back();

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
        //
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
        $review=Review::find($id)->delete();
        Session::flash('message','Review Deleted Successfully.');
        return back();
    }
}
