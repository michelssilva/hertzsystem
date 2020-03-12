<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('rsv_id');
            $table->time('rsv_start_time')->nullable();
            $table->time('rsv_end_time')->nullable();
            $table->string('rsv_class')->nullable();
            $table->string('rsv_week_day')->nullable();
            $table->float('rsv_payment')->nullable();
            $table->integer('rst_id')->nullable();
            $table->integer('unt_id')->nullable();
            $table->integer('crs_id')->nullable();
            $table->string('rsv_teacher_id')->nullable();
            $table->string('rsv_student_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
