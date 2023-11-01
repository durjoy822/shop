<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

//    resource route products controller category to sub category select code
    public function getCategory(){
       return response()->json( Subcategory::where('category_id',$_GET['id'])->get());
    }


}