<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('departmentid'); 
            $table->string('intakeid'); 
            $table->string('section_id'); 
            $table->string('image'); 
            $table->string('academic_id')->unique(); 
            $table->string('stuinfo_id')->unique();
            $table->string('student_id')->unique();
            $table->string('roll')->unique();
             $table->string('email')->unique();
             $table->string('password');
             $table->string('plainpassword'); 
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
        Schema::dropIfExists('studentids');
    }
}
