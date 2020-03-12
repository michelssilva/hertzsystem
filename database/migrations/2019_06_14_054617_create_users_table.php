<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usr_id');
            $table->string('usr_name');
            $table->string('usr_role');
            $table->string('usr_email')->unique();
            $table->string('usr_cpf')->unique();
            $table->float('usr_commission')->nullable();
            $table->string('usr_cell_phone');
            $table->string('usr_telephone')->nullable();
            $table->string('usr_state')->nullable();
            $table->string('usr_city')->nullable();
            $table->string('usr_address')->nullable();
            $table->integer('usr_number')->nullable();
            $table->string('usr_neighborhood')->nullable();
            $table->string('usr_zip_code')->nullable();
            $table->string('usr_code_user')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('usr_password');
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
        Schema::dropIfExists('users');
    }
}
