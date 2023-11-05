<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function forgot(){
        return view('Admin.auth.forgot');
    }
    public function forgotEmail(Request  $request){
        $request->validate([
            'email'=>'required|email|exists:users'
        ],[
            'email.required'=>'Please Inter Previously login email address.',
            'email.exists'=>'The selected email is not found.',
        ]);

        $token = \Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        $message= $token ;
        Mail::send('admin.auth.reset_link_sent_page',['token'=>$token], function ($message) use($request){
            $message ->to($request->email);
            $message->subject('Password Reset ');
        });

       Session::flash('message','We have successfully email your Password reset link!');
       return back();

    }
    public function resetForm($token){
        return view('admin.auth.reset_form',[
            'token'=>$token,
        ]);
    }

    public function newPassword(Request $request ){
        $request->validate([
            'email'=> 'required|email|exists:users',
            'password'=>'required|string|min:6|max:12',
            'confirm_password'=>'required',
        ],
        [
            'password.min'=>'please input minimum 6 character!',
            'password.max'=>'please input maximum 12 character!'
        ]);
        $update_password=DB::table('password_reset_tokens')
            ->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
        if (!$update_password){
            Session::flash('message','Reset link has Expired!');
            return back();
        }
        User::where('email',$request->email)
            ->update(['password'=>Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();
        Session::flash('success','Password Updated Successfully!');
        return redirect()->route('login');

    }

}