<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tcr_name');
            $table->string('tcr_cell_phone')->nullable();
            $table->string('tcr_telephone')->nullable();
            $table->string('tcr_cpf')->nullable();
            $table->string('tcr_email');
            $table->string('tcr_password');
            $table->string('tcr_address')->nullable();
            $table->string('tcr_number')->nullable();
            $table->string('tcr_neighborhood')->nullable();
            $table->string('tcr_zip_code')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
