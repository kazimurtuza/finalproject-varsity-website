<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachersdatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('department');
            $table->string('name');
            $table->string('email')->nullable();;
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('father_profession');
            $table->string('mother_profession');
            $table->string('home');
            $table->string('joining_date');
            $table->string('education_info');
            $table->string('previous_job');
            $table->string('image')->nullable();
            $table->string('nationality');
            $table->string('phone');
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
        Schema::dropIfExists('teachersdatas');
    }
}
