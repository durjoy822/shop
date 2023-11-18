<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Session;






class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index',[
            'roles'=>Role::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.add',[
            'group_names'=>Permission::select(['group_name'])->groupBy('group_name')->get(),
            'permission_name'=>Permission::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role= Role::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'guard_name' => 'web'
        ]);

        $role->syncPermissions($request->role_permissions);

        Session::flash('message','Role add successfully.');
        return redirect()->route('roles.index');
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
        return view('admin.roles.edit',[
            'group_names'=>Permission::select(['group_name'])->groupBy('group_name')->get(),
            'permission_name'=>Permission::all(),

        ]);
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
        //
    }
}
