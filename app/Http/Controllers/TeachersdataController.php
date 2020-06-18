<?php

namespace App\Http\Controllers;

use App\department;
use App\Teacher;
use App\teachersdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeachersdataController extends Controller
{
  

    public function TeacherRegister()
    {
          $department = department::all(); 
          
     
        return view('admin.teachers.teachersRegister',['data'=>$department]);

    }
    public function TeacherRegistration(Request $request)
    {
        $depart= $this->departmentsend($request->department);

        $data=new teachersdata();
        $data->surname="Teacher"; 
        $data->department=$depart;
        $data->name=$request->name;
        $data->home=$request->home;
        $data->email=$request->email;
        $data->joining_date=$request->date;  
        $data->education_info=$request->education_info;
        $data->previous_job=$request->previous_job;
        $data->image=$request->photo;
        $data->nationality=$request->nationality;
        $data->phone=$request->Mobile;
        $data->status=1;
        $data->father_profession=$request->fatherProfession;
        $data->mother_profession=$request->MotherProfession;
        $data->mother_name=$request->MotherName;
        $data->father_name=$request->FatherName;
        $data->save(); 

        //  'name','department','phone','email','plainpassword','password','teachersdata_id'

        $teacher=new Teacher();
        $teacher->teachersdata_id=$data->id;
        $teacher->name=$request->name;
        $teacher->department=$depart;
        $teacher->phone=$request->Mobile;
        $teacher->email=$request->email;
        $teacher->plainpassword=$request->Mobile;
        $teacher->password=Hash::make($request->Mobile);
        $teacher->save();

  
       return redirect()->back()->with('message','registration success');
    
     
    }

    public function departmentsend($id)
    {
       $data=department::find($id);
       $depart=$data->department;
       return $depart;

    }
}
