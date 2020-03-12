<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->bigIncrements('pro_id');
            $table->string('pro_lesson')->nullable();
            $table->string('pro_data')->nullable();
            $table->string('pro_content')->nullable();
            $table->string('pro_book')->nullable();
            $table->string('pro_assessment')->nullable();
            $table->string('pro_comment')->nullable();
            $table->integer('rsv_id')->nullable();
        });
    }

//
//    public function up()
//    {
//        Schema::create('progress', function (Blueprint $table) {
//            $table->bigIncrements('pro_id');
//            $table->string('pro_lesson')->nullable();
//            $table->string('pro_data')->nullable();
//            $table->string('pro_content')->nullable();
//            $table->string('pro_book')->nullable();
//            $table->string('pro_teacher_code');
//            $table->string('pro_teacher_name');
//            $table->string('pro_student_code');
//            $table->string('pro_student_name');
//            $table->string('pro_week_day');
//        });
//    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}
