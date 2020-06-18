<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_academic_info extends Model
{
 protected $fillable=[
'student_id',
'department_id',
'intake_id',
'section_id',
'roll_no',
'shift',
'type_status',
'semester',
    ];
}
