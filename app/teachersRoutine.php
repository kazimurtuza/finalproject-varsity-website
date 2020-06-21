<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachersRoutine extends Model
{
   protected $fillable=[
'day',
'time',
'room_no',
'department_id',
'intake_id',
'section_id',
'teacher_id',
'subj_id',
'semister',
'status',
   ];
}
