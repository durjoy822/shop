<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
Use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function LoginGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback(){
        try{
            $user=Socialite::driver('google')->user();
            $is_user = User::where('email',$user->getEmail())->first();

            if(!$is_user){
               $saveUser= User::UpdateOrCreate(
                    [
                        'google_id'=>$user->getId(),

                    ],

                    [
                        'name'=>$user->getName(),
                        'email'=>$user->getEmail(),
                        'password'=>Hash::make($user->getName().'@'.$user->getId())
                    ]
                );
            }
            else{
                $saveUser =  User::where('email',$user->getEmail())->update([
                    'google_id'=>$user->getId(),
                ]);

                $saveUser = User::where('email',$user->getEmail())->first();
            }
            Auth::guard('user')->login($saveUser);
            Session::flash('success','Google login successfully.');
            return redirect()->route('dashboard');

        }catch(\Throwable $th){
            throw $th;
        }
    }

}