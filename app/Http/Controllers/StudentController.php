<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\department;
use App\intake;
use App\section;
use App\student_academic_info;
use App\studentid;
use App\studentResult;
use App\students_personal_info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash;
use Image;

class StudentController extends Controller
{
    public function StudentRegistration()
    {
       
       
      $department = department::all(); 
      return view('admin.student.studentregistration',['data'=>$department]);
    
    }
    public function intakelist(Request $request)
    {
        $data=intake::where('department_id',$request->id)->get();
         return view('admin.student.intake-list',['data'=>$data]);
       
       
    }
        public function intakewisesectonList(Request $request)
    {
        $section=section::where('intake_id',$request->id)->get();
        return view('admin.student.intakewise-sectonList',['data'=>$section]);

    }  

    public function studentregister(Request $request)
    {
         $this->validate($request,[
           'StudentName'=>'string|max:255|required',
           'address'=>'string|max:255|required',
           'fatherProfession'=>'string|max:255|required',
           'MotherProfession'=>'string|max:255|required',
           'FatherName'=>'string|max:255|required',
            'Mobile'=>'numeric|min:11|required',
            'FatherMobile'=>'numeric',
            'MotherMobile'=>'numeric',
            'MotherName'=>'string',
            'email'=>'string|email|max:255',
        ]);

        $imagefile=$request->file('photo');
        $imagename=$imagefile->getClientOriginalName();
        $place="public/studentspic/";
        $url=$place.$imagename;
        Image::make($imagefile)->resize(300,300)->save($url);
    

        $stuinfo=new students_personal_info();
        $stuinfo->student_name=$request->StudentName;
        $stuinfo->address=$request->address;
        $stuinfo->fater_name=$request->FatherName;
        $stuinfo->father_mobile=$request->FatherMobile;
        $stuinfo->mother_name=$request->MotherName;
        $stuinfo->mother_mobile=$request->MotherMobile;
        $stuinfo->father_profession=$request->fatherProfession;
        $stuinfo->mother_profession=$request->MotherProfession;
        $stuinfo->email_address=$request->email;
        $stuinfo->sms_mobile=$request->Mobile;
        $stuinfo->date_of_admission=$request->date;
        $stuinfo->student_photo=$url;
        $stuinfo->status=1;
        $stuinfo->password=$request->Mobile;
        $stuinfo->encrypted_password=Hash::make($request->Mobile);
        $stuinfo->registeredBy=Auth::user()->id;
        $stuinfo->save();

        $academic=new student_academic_info();
        $academic->student_id=$stuinfo->id;
        $academic->department_id=$request->department;
        $academic->intake_id=$request->intake;
        $academic->section_id=$request->section;
        $academic->roll_no=$stuinfo->id;
        $academic->semester=1;
        $academic->shift=$request->Shift;
        $academic->type_status=1;
        $academic->save();

        // for student nx  id 
        $studentNxid=new studentid();   
        $studentNxid->academic_id=$academic->id;
        $studentNxid->stuinfo_id=$stuinfo->id;  
        $studentNxid->image=$url;                                 
        $studentNxid->student_id=$stuinfo->id;                                 
        $studentNxid->roll=$stuinfo->id;
        $studentNxid->name=$request->StudentName;
        $studentNxid->departmentid=$request->department;
        $studentNxid->intakeid=$request->intake;
        $studentNxid->section_id=$request->section;
        $studentNxid->plainpassword=$request->Mobile;
        $studentNxid->password=Hash::make($request->Mobile);
        $studentNxid->email=$request->email;
        $studentNxid->save();  


        //-------------student result ------------

        //semester wise subject list
  
        $subject=DB::table('csecourselists')->where([
            ['csecourselists.semester_id','=',$academic->semester]
        ])->get();

        foreach ($subject as $data) {
        $studentResult=new studentResult(); 
        $studentResult->student_id=$stuinfo->id;
        $studentResult->course_id=$subject->id;
        $studentResult->semester_id=$academic->semester;
        $studentResult->mid='';
        $studentResult->final='';
        $studentResult->extra='';
        $studentResult->attendance='';
        $studentResult->save();
           
        };

       
       


        
        return back()->with('message','successfull');

    }

    public function studentlist()
    {
        $data=department::all();
        return view('admin.student.student-list',['data'=>$data]);
    }   

    public function showintakelist(Request $request)
    {
       
             //intake list show
        $data=intake::where('department_id',$request->id)->get();

        return view('admin.student.intakeshow',['data'=>$data]);
      

    }
    public function showsectionlist(Request $request)
    {
        $data=section::where('intake_id',$request->id)->get();
        return view('admin.student.showsection',['data'=>$data]);
      

    }

    public function studentsListTable(Request $request) 
    {
        $studentdata=DB::table('students_personal_infos')
        ->join('student_academic_infos','students_personal_infos.id','=','student_academic_infos.student_id')
        ->join('departments','departments.id','=','student_academic_infos.department_id')
        ->join('intakes','student_academic_infos.intake_id','=','intakes.id')
        ->join('sections','student_academic_infos.section_id','=','sections.id')
        ->where([
            ['student_academic_infos.department_id','=', $request->departmentid],
            ['student_academic_infos.intake_id','=',$request->intakeid],
            ['student_academic_infos.section_id','=',$request->sectionid],
             ])->get();
//   return $request->departmentid.$request->intakeid.$request->sectionid;
 return view('admin.student.student-table',['data'=>$studentdata]);

    }

    public function departmentwiseStudentlist(Request $request)
    {  
         //student tabble show
         $studentdata=DB::table('students_personal_infos')
        ->join('student_academic_infos','students_personal_infos.id','=','student_academic_infos.student_id')
        ->join('departments','departments.id','=','student_academic_infos.department_id')
        ->join('intakes','student_academic_infos.intake_id','=','intakes.id')
        ->join('sections','student_academic_infos.section_id','=','sections.id')
        ->where([
            ['student_academic_infos.department_id','=', $request->departmentid],
             ])->get();
              return view('admin.student.department-student-table',['data'=>$studentdata]);
           
    }
    public function intakeWiseStudentlist(Request $request)
    {
         // student tabble show
         $studentdata=DB::table('students_personal_infos')
        ->join('student_academic_infos','students_personal_infos.id','=','student_academic_infos.student_id')
        ->join('departments','departments.id','=','student_academic_infos.department_id')
        ->join('intakes','student_academic_infos.intake_id','=','intakes.id')
        ->join('sections','student_academic_infos.section_id','=','sections.id')
        ->where([
            ['student_academic_infos.department_id','=', $request->departmentid],
            ['student_academic_infos.intake_id','=',$request->intakeid],
             ])->get();
              return view('admin.student.intake-student-table',['data'=>$studentdata]); 
            
    }
}
