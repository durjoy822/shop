<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash as FacadesHash;


class AuthService

{


 public function registerStore($request){
    // dd($request->all());
    $user=new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=FacadesHash::make($request->password);
    $user->save();
    Auth::guard('user')->login($user);

 }





 }


