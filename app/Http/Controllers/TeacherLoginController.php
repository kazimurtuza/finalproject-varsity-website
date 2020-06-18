<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function loginshow()
    {
         return view('admin.teachers.teachersLogin'); 
    }
    public function login(Request $request)
    {
         $this->validate($request,[
         'email'=>'required|email',
          'password'=>'required|min:8',
         ]);

         ///attempt

         if(Auth::guard('teacher')->attempt(['email'=>$request->email,
         'password'=>$request->password],$request->remember)){
                
            return redirect('teacher-home');
         }
         else{
             return redirect()->back()->with('message','password or email error');
         }
    }
    
}
