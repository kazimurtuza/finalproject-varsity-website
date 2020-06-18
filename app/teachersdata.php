<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachersdata extends Model
{
    protected $fillable = [
'surname',
'department',
'name',
'home',
'email',
'joining_date',
'education_info',
'previous_job',
'image',
'nationality',
'phone',
'father_profession',
'mother_profession',
'mother_name',
'father_name',
'status',
    ];
}
