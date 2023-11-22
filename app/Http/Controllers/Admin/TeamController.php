<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    use FileUpload;
    use FileDelete;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.team.index',[
            'teams'=>Team::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'position'=>'required',
        ]);
        $team=new Team();
        $team->name=$request->name;
        $team->position=$request->position;
        $team->facebook=$request->facebook;
        $team->twitter=$request->twitter;
        $team->whats_app=$request->whats_app;
        $team->image=$this->uploadImage($request->image,'team');
        $team->save();
        Session::flash('message','Team add successfully. ');
        return redirect()->route('teams.index');

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
        return view('admin.team.edit',[
            'team'=>Team::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'position'=>'required',
        ]);
        $team=Team::find($id);
        $team->name=$request->name;
        $team->position=$request->position;
        $team->facebook=$request->facebook;
        $team->twitter=$request->twitter;
        $team->whats_app=$request->whats_app;
        if($request->file('image')){
            if(file_exists($team->image)){
                unlink($team->image);
        }
        $team->image=$this->uploadImage($request->image,'team');
    }
        $team->save();
        Session::flash('message','Team updated  successfully. ');
        return redirect()->route('teams.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team=Team::find($id);
        $team->image=$this->deleteImage($team->image);
        $team->delete();
        Session::flash('message','Team Delete successfully!');
        return back();
    }
}