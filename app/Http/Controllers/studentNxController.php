<?php

namespace App\Http\Controllers;

use App\students_personal_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class studentNxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:studentNx');
    }

    public function index()
    {
          return view('Nx.nx-home')->with('status','welcum Nx');
    }

 


    // public function studentNx()
    // {
    //     return view('Nx.loginNx');
    // }
    // public function Nxhome(Request $request) 
    // {
    //    $info=DB::table('students_personal_infos')->join('student_academic_infos','students_personal_infos.id','=','student_academic_infos.student_id')->where([
    //        ['students_personal_infos.student_name',$request->name],
    //        ['students_personal_infos.sms_mobile',$request->password],
    //    ])->get();
       
    //     if(sizeof($info)>0)
    //     {
    //         return view('Nx.nx-home',['data'=>$info]) ;
    //     }
    //     else{
    //         return back()->with('message','USERNAME or PASSWORD ERROR');
    //     }
    
  
      
        
   // }
}
