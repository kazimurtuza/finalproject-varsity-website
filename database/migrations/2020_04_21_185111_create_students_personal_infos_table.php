<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            // $table->integer('department_id');
            // $table->integer('intake_id');
            // $table->integer('section_id');
            // $table->integer('roll_no');
            // $table->integer('shift_id');
            $table->string('address');
            $table->string('fater_name');
            $table->string('father_mobile')->nullable();
            $table->string('mother_name');
            $table->string('mother_mobile')->nullable();
            $table->string('father_profession');
            $table->string('mother_profession');
            $table->string('email_address')->nullable();
            $table->string('sms_mobile');
            $table->string('date_of_admission');
            $table->string('student_photo')->nullable();
            $table->boolean('status');
            $table->string('password',255);
            $table->string('encrypted_password',255);
            $table->string('registeredBy');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_personal_infos');
    }
}
