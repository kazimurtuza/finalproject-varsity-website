<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\department;

class DepartmentController extends Controller
{
    public function DepartmentAddShow()
    {
        $value=department::all();
        return view('admin.academic.department_add_show',['data'=>$value]);
    }
    public function AddDepartment(Request $request) 
    {
        
        $this->validate($request,[
            'department'=>'required | string | unique:departments,department',
        ]);

        $data= new department();
        $data->department=$request->department; 
        $data->status=1;
        $data->save();
       
         
      

    }
    public function DepartmentList()
    {
        $value=department::all();
         return view('admin.ajax_academic.departmentList',['data'=>$value]);
  
        // return view('admin.school.addbatch',['classname'=>$allclassname]);
    }
}
