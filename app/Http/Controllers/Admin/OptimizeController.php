<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class OptimizeController extends Controller
{
    public function optimize(){
        return view('admin.optimize.index');
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');
        Session::flash('success','Application cache cleared.');
        return back();
    }


    public function runMigrate()
    {

        Artisan::call('migrate');
        Session::flash('success','Migrations completed.');
        return back();
    }


    public function migrateFreshSeed()
    {
        Artisan::call('migrate:fresh --seed');
        sleep(5);
        Session::flash('success','Migrations and fresh seeding completed.');
        return back();
    }
}
