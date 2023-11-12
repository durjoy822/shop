<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settingEdit(){
        return view('admin.settings.index',[
            'setting'=>Setting::first(),
            // dd(Setting::first()),
        ]);
    }
}