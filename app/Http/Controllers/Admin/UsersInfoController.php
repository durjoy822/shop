<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Users_profile;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersInfoController extends Controller
{
    use FileUpload;

    public function userIndex(){
        return view('admin.auth.profile.index', [
            'info' => Users_profile::where('user_id', Auth::guard('user')->user()->id)->first(),
            'setting'=>Setting::first(),
        ]);
    }

    public function userInfoUpdate(Request $request, $id){
            // return $request->all();
            $request->validate([
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'address'=>'required',
            ]);

            $info=Users_profile::find($id);
            $info->name=$request->name;
            $info->email=$request->email;
            $info->phone=$request->phone;
            $info->address=$request->address;
            $info->address=$request->address;
            if($request->file('image')){
                if(file_exists($info->image)){
                    unlink($info->image);
                }
                $info->image=$this->uploadImage($request->image,'profile_info');
            }
            $info->save();
            Session::flash('message','Profile info updated successfully.');
            return back();
    }

}