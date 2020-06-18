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
    ];
}
