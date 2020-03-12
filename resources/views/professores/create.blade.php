@extends('layouts.app')


@section('content')

    <h1>Cadastrar Professor</h1>

    <form method="POST" action="/professores">

        {{ csrf_field() }}

        <input type="text" name="prf_nome" placeholder="Nome"><br>
        <br>
        <input type="text" name="prf_celular" placeholder="Celular"><br>
        <br>
        <input type="text" name="prf_telefone" placeholder="Telefone"><br>
        <br>
        <input type="text" name="prf_cpf" placeholder="CPF"><br>
        <br>
        <input type="text" name="prf_email" placeholder="E-mail"><br>
        <br>
        <input type="text" name="prf_senha" placeholder="Senha"><br>
        <br>
        <input type="text" name="prf_endereco" placeholder="Endereço"><br>
        <br>
        <input type="text" name="prf_numero" placeholder="Número"><br>
        <br>
        <input type="text" name="prf_bairro" placeholder="Bairro"><br>
        <br>
        <input type="text" name="prf_cep" placeholder="CEP"><br>
        <br>
        <input type="submit" name="submit" value="CADASTRAR"><br>


    </form>




@endsection