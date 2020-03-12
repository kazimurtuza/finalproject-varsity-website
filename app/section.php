<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $fillable=[
    'department_id','intake_id','section','capaity','status',
           
    ];
}
