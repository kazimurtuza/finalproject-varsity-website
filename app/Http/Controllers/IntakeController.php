<?php

namespace App\Http\Controllers;

use App\department;
use App\intake;
use DB;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function IntakeAddShow()
    {
        $intake=intake::all()->last();
        $department=department::all();
        return view('admin.academic.intake_add_show',['intake'=>$intake,'department'=>$department]);
    }
    public function AddIntake(Request $request)
    {

        $intake=new intake();
        $intake->department_id=$request->department;
        $intake->intake=$request->intake;
        $intake->status=1;
        $intake->save();
       

    }

    public function ShowDepartmentwiseIntake(Request $request)
    {
       
        $data=DB::table('intakes')->where('department_id','=',$request->dep)->join('departments','intakes.department_id','=','departments.id')->select('intakes.*','departments.department')->get();
        return view('admin.ajax_academic.intakeList',['data'=>$data]);
      
       
       
    }

    public function GetIntake(Request $request)
    {
        // $intake=DB::table('intakes')->where('department_id','=',$request->val)->last();
        $intake=intake::all()->where('department_id','=',$request->val)->last();
        if($intake)
        {
            return $intake->intake;
        }
        return "no intake here";
        
        // return $request->val;

    }
}
