<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() {
        return view('admin.user.index',[
            'users'=>User::latest()->get(), 
        ]);
    }
    public function userAdd() {
        return view('admin.user.add');
    }
}
