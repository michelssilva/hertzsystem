<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //

    protected $fillable = [
        'prf_nome',
        'prf_celular',
        'prf_telefone',
        'prf_cpf',
        'prf_email',
        'prf_senha',
        'prf_endereco',
        'prf_numero',
        'prf_bairro',
        'prf_cep'
    ];
}
