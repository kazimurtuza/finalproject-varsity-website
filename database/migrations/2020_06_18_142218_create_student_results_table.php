<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->string('course_no'); 
            $table->string('department_id');
            $table->string('intake_id'); 
            $table->string('section_id');
            $table->string('semester_id');
            $table->string('teacher_id')->nullable();
            $table->string('mid')->nullable();
            $table->string('final')->nullable();
            $table->string('extra')->nullable();
            $table->string('attendance')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('student_results');
    }
}
