<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intake extends Model
{
    protected $fillable=[
    'department_id','intake','status',
    ];
}
