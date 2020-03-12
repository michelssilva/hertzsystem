<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel_cms";

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar aula realizada</div>
                    <br>

                    <div class="card-body">
                        <form action="/new_lesson/{{$rsv_id}}" method="POST">
                        @csrf



                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                            <div class="col-md-6">
                                <input id="lesson_input" type="text" class="form-control{{ $errors->has('lesson_input') ? ' is-invalid' : '' }}" name="lesson_input" value="{{ old('lesson_input') }}" required autofocus>

                                @if ($errors->has('lesson_input'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lesson_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-6">
                                <input id="date_input" type="text" class="form-control{{ $errors->has('date_input') ? ' is-invalid' : '' }}" name="date_input" value="{{ old('date_input') }}" required autofocus>

                                @if ($errors->has('date_input'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Conteudo') }}</label>

                            <div class="col-md-6">
                                <input id="content_input" type="text" class="form-control{{ $errors->has('content_input') ? ' is-invalid' : '' }}" name="content_input" value="{{ old('content_input') }}" required autofocus>

                                @if ($errors->has('content_input'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Material') }}</label>

                            <div class="col-md-6">
                                <input id="book_input" type="text" class="form-control{{ $errors->has('book_input') ? ' is-invalid' : '' }}" name="book_input" value="{{ old('book_input') }}" required autofocus>

                                @if ($errors->has('book_input'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_input') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                                <a href="/content/{{$rsv_id}}"><button  type="button" class="btn btn-primary">
                                    {{ __('Cancelar') }}
                                </button></a>
                            </div>
                        </div>
                        <br>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection