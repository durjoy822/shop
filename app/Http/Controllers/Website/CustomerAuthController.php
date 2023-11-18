<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash as FacadesHash;


class CustomerAuthController extends Controller
{
    public function customerLogin(){
        return view('frontend.auth.login');
    }
    public function customerRegister(){
        return view('frontend.auth.register');
    }

    public function customerStore(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
        ]);
        $customer=new User();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->role="customer";
        if($request->password==$request->confirm_password){
            $customer->password=FacadesHash::make($request->password);
        }
        $customer->save();
        Auth::guard('customer')->login($customer);
        Session::flash('message','Customer Register Successfully.');
        return redirect()->route('customer.dashboard');

    }

    public function loginCheck(Request $request){
        if(Auth::guard('customer')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ],$request->has('remember_token'))){
            Session::flash('success','login Successfully');
            return redirect()->route('dashboard');
        }else{
            Session::flash('success','Give a right Information');
            return back();
        }
    }
    public function logout(){
        Auth::guard('user')->logout();
        Session::flash('success','logout Successfully');
        return redirect()->route('login');
    }
}
