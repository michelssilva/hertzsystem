@extends('layouts.app')


@section('content')

    <h1>Editar Cadastro Professor</h1>

    {!! Form::model($teacher,['method'=>'PATCH', 'action'=>['TeachersController@update', $teacher->id]]) !!}

    {{ csrf_field() }}



    {!! Form::label('tcr_name','Nome:') !!}
    {!! Form::text('tcr_name',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_cell_phone','Celular:') !!}
    {!! Form::text('tcr_cell_phone',null,['class'=>'form-control']) !!}<br>
    <br>

    {!! Form::label('tcr_telephone','Telefone:') !!}
    {!! Form::text('tcr_telephone',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_cpf','CPF:') !!}
    {!! Form::text('tcr_cpf',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_email','E-mail:') !!}
    {!! Form::text('tcr_email',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_password','Senha:') !!}
    {!! Form::text('tcr_password',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_address','Endereço:') !!}
    {!! Form::text('tcr_address',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_number','Nº:') !!}
    {!! Form::text('tcr_number',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_neighborhood','Bairro:') !!}
    {!! Form::text('tcr_neighborhood',null,['class'=>'form-control']) !!}<br>
    <br>
    {!! Form::label('tcr_zip_code','CEP:') !!}
    {!! Form::text('tcr_zip_code',null,['class'=>'form-control']) !!}<br>
    <br>

    {!! Form::submit('Atualizar',['class'=>"btn btn-info"]) !!}

    {!! Form::close()!!}

    <br>


    {!! Form::model($teacher,['method'=>'DELETE', 'action'=>['TeachersController@destroy',$teacher->id]]) !!}

    {!! Form::submit('Deletar',['class'=>"btn btn-danger"]) !!}

    {!! Form::close()!!}

    <br><a href="/teachers/"><button> Lista de Cadastros</button></a>






@endsection












