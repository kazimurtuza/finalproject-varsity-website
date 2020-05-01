<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students_personal_info extends Model
{
protected $fillable=[
'student_name',
'address',
'fater_name',
'father_mobile',
'mother_name',
'mother_mobile',
'father_profession',
'mother_profession',
'email_address',
'sms_mobile',
'date_of_admission',
'student_photo',
'status',
'password',
'encrypted_password',
// 'department_id',
// 'intake_id',
// 'section_id',
// 'roll_no',
// 'shift',
'registeredBy',
];
}
