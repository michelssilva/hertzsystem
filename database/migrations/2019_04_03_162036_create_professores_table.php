<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('prf_id');
            $table->string('prf_nome');
            $table->string('prf_celular');
            $table->string('prf_telefone');
            $table->string('prf_cpf');
            $table->string('prf_email');
            $table->string('prf_senha');
            $table->string('prf_endereco');
            $table->string('prf_numero');
            $table->string('prf_bairro');
            $table->string('prf_cep');
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
        Schema::dropIfExists('professores');
    }
}
