<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherHomeController extends Controller
{
     // public function __construct()
     // {
     //      $this->middleware('guard:teacher');
          
     // }
     public function __construct()
    {
        $this->middleware('auth:teacher');  
        
    } 

    public function teacherhome()  
    {
         return view('admin.teachers.teachers-Home'); 
    }

    public function logout()
    {
         
         auth::guard('teacher')->logout();
         return redirect('teacher-login');  
         
    }
   
    
}
