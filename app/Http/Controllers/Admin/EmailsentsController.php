<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Single_mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SingleSentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailsentsController extends Controller
{
    public function index(){
        return view('admin.email.index',[
            'users'=>User::latest()->get(),
        ]);
    }
    public function create($id){
        return view('admin.email.index',[
            'users'=>User::latest()->get(),
            'email'=>User::find($id),
        ]);
    }
    public function emailSent(Request $request){
        // dd($request->all());
        $request->validate([
            'email'=>'required',
            'email_content'=>'required',
        ],[
            'email.required'=>"please Select user  from user data table",
            'email_content.required'=>"Please write something for sent email",
        ]);
        $singleEmail=new Single_mail();
        $singleEmail->user_id=$request->user_id;
        $singleEmail->email=$request->email;
        $singleEmail->email_content=$request->email_content;
        $singleEmail->save();
        $mail=[
            'email_content'=>$request->email_content,
        ];
        Mail::to('nrdurjoy822@gmail.com')->send(new SingleSentMail($mail));
        Session::flash('message','Mail sent successfully.');
        return back();
    }
}