<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsecourselistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csecourselists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_no');
            $table->string('course_title');
            $table->string('cradit');
            $table->string('department_id');
            $table->string('type');
            $table->string('semester_id');
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
        Schema::dropIfExists('csecourselists');
    }
}
