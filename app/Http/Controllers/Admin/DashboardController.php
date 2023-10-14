<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function roles(){
        return view('admin.roles.index');
    }
    public function rolesAdd(){
        return view('admin.roles.add');
    }
}
