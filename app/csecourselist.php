<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csecourselist extends Model
{ protected $fillable=[
    'course_no',
'course_title',
'cradit',
'department_id',
'type',
'semester_id',
];
}
