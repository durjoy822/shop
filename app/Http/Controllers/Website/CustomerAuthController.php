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

    public function customerLoginCheck(Request $request){
        // dd($request->all());
        $request->validate([
            'email'=>'required|email|exists:users,email',
            // 'password'=>'required|min:4|exists:users,password'
        ]);
        if(Auth::guard('customer')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role,
        ],$request->has('remember_token'))){
            Session::flash('message','login Successfully');
            return redirect()->route('customer.dashboard');
        }else{
            Session::flash('message','Give a right Information');
            return back();
        }
    }

    public function customerLogout(){
        Auth::guard('customer')->logout();
        Session::flash('message','logout Successfully');
        return redirect()->route('home');
    }
}