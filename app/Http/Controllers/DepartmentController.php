<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function DepartmentAddShow()
    {
        return view('admin.academic.department_add_show');
    }
}
