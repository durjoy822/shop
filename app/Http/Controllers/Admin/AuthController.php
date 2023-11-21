<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash as FacadesHash;
use App\Http\Controllers\Controller;
use App\Models\Users_profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login',[
            'login'=>User::first(),
        ]);
    }
    public function register(){
        return view('admin.auth.register');
    }
    public function forgot(){
        return view('admin.auth.forgot');
    }

    public function registerStore(AuthRequest $request){
        // dd($request->all());
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=FacadesHash::make($request->password);
        $user->save();

            // it's for user profile info
        $userInfo= new Users_profile();
        $userInfo->user_id= $user->id;
        $userInfo->name=$request->name;
        $userInfo->email=$request->email;
        $userInfo->save();



        Auth::guard('user')->login($user);
        Session::flash('success','Admin register successfully');
        return redirect()->route('dashboard');

    }

    public function loginCheck(Request $request){
        if(Auth::guard('user')->attempt([
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