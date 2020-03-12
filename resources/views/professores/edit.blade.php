@extends('layouts.app')

@section('content')

    <h1>Editar Cadastro Professor</h1>

    <form method="POST" action="/professores/{{$professor->id}}">

        <input type="hidden" name="_method" value="PUT">

        {{ csrf_field() }}

        <input type="text" name="prf_nome" placeholder="Nome" value="{{$professor->prf_nome}}"><br>
        <br>
        <input type="text" name="prf_celular" placeholder="Celular" value="{{$professor->prf_celular}}"><br>
        <br>
        <input type="text" name="prf_telefone" placeholder="Telefone" value="{{$professor->prf_telefone}}"><br>
        <br>
        <input type="text" name="prf_cpf" placeholder="CPF" value="{{$professor->prf_cpf}}"><br>
        <br>
        <input type="text" name="prf_email" placeholder="E-mail" value="{{$professor->prf_email}}"><br>
        <br>
        <input type="text" name="prf_senha" placeholder="Senha" value="{{$professor->prf_senha}}"><br>
        <br>
        <input type="text" name="prf_endereco" placeholder="Endereço" value="{{$professor->prf_endereco}}"><br>
        <br>
        <input type="text" name="prf_numero" placeholder="Número" value="{{$professor->prf_numero}}"><br>
        <br>
        <input type="text" name="prf_bairro" placeholder="Bairro" value="{{$professor->prf_bairro}}"><br>
        <br>
        <input type="text" name="prf_cep" placeholder="CEP" value="{{$professor->prf_cep}}"><br>
        <br>
        <input type="submit" name="submit" value="CADASTRAR"><br>

    </form>

@endsection