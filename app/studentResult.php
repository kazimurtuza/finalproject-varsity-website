<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentResult extends Model
{
    protected $fillable=[
        'student_id',
'course_id',
'semester_id',
'mid',
'final',
'extra',
'attendance',
'department_id',
'intake_id',
'section_id', 
'teacher_id',
    ];
}
