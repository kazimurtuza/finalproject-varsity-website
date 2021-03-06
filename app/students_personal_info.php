<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class students_personal_info extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
'registeredBy',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'encrypted_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

