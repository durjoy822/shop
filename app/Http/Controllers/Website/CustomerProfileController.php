<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CustomerProfile;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerProfileController extends Controller
{
    use FileUpload;

    public function customerProfileUpdate(Request $request, $id){
        // return $request->all();
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'zip'=>'required',
            'country'=>'required',
            'state'=>'required',
            'nid'=>'required',
            'address'=>'required',
        ]);
        $customerProfile=CustomerProfile::find($id);
        $customerProfile->name=$request->name;
        $customerProfile->email=$request->email;
        $customerProfile->phone=$request->phone;
        $customerProfile->country=$request->country;
        $customerProfile->state=$request->state;
        $customerProfile->zip=$request->zip;
        $customerProfile->nid=$request->nid;
        $customerProfile->address=$request->address;
        if($request->file('image')){
            if(file_exists($customerProfile->image)){
                unlink($customerProfile->image);
            }
            $customerProfile->image=$this->uploadImage($request->image,'customer-profile');
        }
        $customerProfile->save();
        Session::flash('message','Customer info Updated successfully.');
        return back(); 
    }
}