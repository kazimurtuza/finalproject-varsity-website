<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NxController extends Controller
{
    public function showlogin()
    {
        return view('admin.studentnx.student-nx-login');
    }

    //use attempt login
    public function login(Request $request)  
    {
      
         $this->validate($request,[
          'email'=>'required|email',
          'password'=>'required|min:8',
       ]);
       if(Auth::guard('studentid')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) 
       {
             return redirect()->intended(route('nx-home'));
           
       }
       else{
           return redirect()->back()->with('message','password or email error');
       }
    }
}
    
