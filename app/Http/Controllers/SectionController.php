<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\department;
use App\intake;
use App\section;

class SectionController extends Controller
{
    public function SectionAddShow()  
    {
        $data=DB::table('sections')
        ->join('intakes','sections.intake_id','=','intakes.id')
        ->join('departments','sections.department_id','=','departments.id')
        ->select('intakes.intake','departments.department','sections.*')
        ->get();
        $department = department::all();

         return view('admin.academic.section_add_show',['table'=>$data,'dprt'=>$department]);
        // return $data;
    }
    public function IntakeList(Request $request)
    {
        $intake=intake::where(['department_id'=>$request->id])->get();
        return view('admin.ajax_academic.show_intake_list',['intake'=>$intake]);   
    }
   
    public function AddSection(Request $request)
    {
        $data=new section();
        $data->department_id=$request->department;
        $data->intake_id=$request->intake;
        $data->section=$request->section;
        $data->capacity='45';
        $data->status=1;
        $data->save();

     
    }

    public function SectionTableShow(Request $request)
    {
        $data=DB::table('sections')
        ->join('intakes','sections.intake_id','=','intakes.id')
        ->join('departments','sections.department_id','=','departments.id')
        ->select('intakes.intake','departments.department','sections.*')
        ->where([
            ['sections.department_id','=',$request->department],
            ['sections.intake_id','=',$request->intake],  
            ])
        ->get();
       
    
         return  view('admin.ajax_academic.section-table-show',['data'=>$data]);
       

    }
    public function SectionList(Request $request)
    {
       
        $data=section::where('department_id',$request->department)->where('intake_id',$request->intake)->get()->last();

    
        // return "<option>".$data->section."</option>";
        return $data->section;

    }



 
}
