<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class nxhomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:studentid');  
        
    } 
    public function Nxhome()
    {  
        $id=Auth::user()->academic_id;
        $academicid=Auth::user()->stuinfo_id;
         $studentinfo=DB::table('studentids')->join('student_academic_infos','student_academic_infos.id','=','studentids.academic_id')
        ->join('departments','departments.id','=','student_academic_infos.department_id')
        ->join('intakes','student_academic_infos.intake_id','=','intakes.id')
        ->join('sections','student_academic_infos.section_id','=','sections.id')->where(  
            [ 
                ['student_academic_infos.id','=',$id],
                ['student_academic_infos.department_id','=',auth::user()->departmentid],
                ['student_academic_infos.intake_id','=',auth::user()->intakeid],
            
               
            ]
          )->get();   
        return view('admin.studentNx.nxhome',['studentinfo'=>$studentinfo]);    
    }
    public function Nxstudentinfo()
    {
        return view('admin.studentNx.nx-studentinfo'); 
    }
}
