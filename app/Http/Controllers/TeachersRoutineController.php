<?php

namespace App\Http\Controllers;

use App\csecourselist;
use App\studentResult;
use App\Teacher;
use App\teachersRoutine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersRoutineController extends Controller
{
    public function  sublist(Request $request)
    {
       
    //    select intake section wise semester id

          $data=studentResult::where([
            ['department_id','=',$request->departmentid],
            ['intake_id','=',$request->intakeid],
            ['section_id','=',$request->sectionid],  
        ])->get()->first();

         $semester=$data->semester_id;
               // find all subject list semester id wise
        $sub=csecourselist::where([
            ['semester_id','=',$semester],
            ])->get();
             return view('admin.routineSubjectlist',['data'=>$sub]); 

     
//  return sizeof($sub); 
    //    return '<option val ue="">--select subjehgjktykbv hgjct--</option>';
             
   
    }   

    public function teacherlist(Request $request)
    {
        // $data= Teacher::where([
        $data= DB::table('teachers')->where([
            ['department','=',$request->id],
        ])->get();
           return view('admin.teacherlist',['data'=>$data]);  
    }
    public function teachersRoutineData(Request $request) 
    {
         $sm=csecourselist::where([
            ['id','=',$request->subject],
        ])->get()->first(); 

//    check  data already saved or not and send message

       $stayornot= teachersRoutine::where([ 
        ['department_id','=',$request->department],
        ['intake_id','=',$request->intake],
        ['section_id','=',$request->section],
        ['subj_id','=',$request->subject],
        ['teacher_id','=',$request->teacher_id],
       ])->get();
       if(sizeof($stayornot)>0) 
       {
           return redirect()->back()->with('message','already saved data');

       }

        $teacherroutine=new teachersRoutine();
        $teacherroutine->department_id=$request->department;
        $teacherroutine->intake_id=$request->intake;
        $teacherroutine->section_id=$request->section;
        $teacherroutine->subj_id=$request->subject;
        $teacherroutine->teacher_id=$request->teacher_id;
        $teacherroutine->semister=$sm->semester_id;
        $teacherroutine->status=1;
        $teacherroutine->save(); 

        $data=studentResult::where([
            ['department_id','=',$request->department],
            ['intake_id','=',$request->intake],
            ['section_id','=',$request->section],
            ['course_id','=',$request->subject],
         ])->update(['teacher_id'=>$request->teacher_id]);
        
      return redirect()->back()->with('message','successfully save');

     
       
    }
}   
