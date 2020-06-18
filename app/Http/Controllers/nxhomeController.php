<?php

namespace App\Http\Controllers;

use App\student_academic_info;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

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
    public function Nxstudentinfo(Request $request)
    {
        $data= $this->info();
         return view('admin.studentNx.nx-studentinfo',['studentinfo'=>$data]);        
    }
        // it show result present courses
    public function academicinfo()
    {
       $subjectlist= DB::table('student_academic_infos')->join('csecourselists','student_academic_infos.semester','=','csecourselists.semester_id')->join('intakes','student_academic_infos.intake_id','=','intakes.id')
     ->join('sections','student_academic_infos.section_id','=','sections.id')
       ->where([
          ['student_academic_infos.roll_no','=',auth::user()->roll],
           ])->get();
    return view('admin.studentNx.nx-academicinfo',['data'=>$subjectlist]); 
        


    }
    public function info() 
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
           
          return $studentinfo;

    }

    public function Nxlogout(Request $request) 
    {
       auth::guard('studentid')->logout();
       return redirect('/');
    }
}
