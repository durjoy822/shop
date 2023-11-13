<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    use FileDelete;
    use FileUpload;

    public function settingEdit(){
        return view('admin.settings.index',[
            'setting'=>Setting::first(),
        ]);
    }
    public function settingUpdate(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $setting = Setting::find($id);
        $setting->name=$request->name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->design_develop=$request->design_develop;
        $setting->opening_day=$request->opening_day;
        $setting->closeing_day=$request->closeing_day;
        $setting->opening_time=$request->closeing_time;
        $setting->closeing_time=$request->closeing_time;

        if($request->file('dark_logo')){
            if(file_exists($setting->dark_logo)){
                unlink($setting->dark_logo);
            }
            $setting->dark_logo=$this->uploadImage($request->dark_logo,'settings');
        }
        if($request->file('light_logo')){
            if(file_exists($setting->light_logo)){
                unlink($setting->light_logo);
            }
            $setting->light_logo=$this->uploadImage($request->light_logo,'settings');
        }
        if($request->file('favicon')){
            if(file_exists($setting->favicon)){
                unlink($setting->favicon);
            }
            $setting->favicon=$this->uploadImage($request->favicon,'settings');
        }
        $setting->save();
        Session::flash('message','Settings Updated successfully.');
        return back(); 
    }
}