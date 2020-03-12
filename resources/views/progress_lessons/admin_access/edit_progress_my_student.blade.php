2@extends('layouts.app')


<link rel="stylesheet" type="text/css"   href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
<link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css" media="screen" rel="stylesheet" type="text/css" />

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Andamento') }}</div>

                    <div class="card-body">
                        <form action="/update_progress/admin_access/{{$progress->pro_id}}" method="PATCH" >

                        @csrf


                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="pro_lesson" value="{{$progress->pro_lesson}}"><br>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-6">
                                <div class="input-group datepicker">
                                <input  type="text" class="form-control date-mask to-date" name="pro_data" value="{{$progress->pro_data}}">
                                </div><br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Conteudo') }}</label>

                            <div class="col-md-6">

                                <input  type="text" class="form-control" name="pro_content" value="{{$progress->pro_content}}"><br>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cell_phone" class="col-md-4 col-form-label text-md-right">{{ __('Material') }}</label>

                            <div class="col-md-6">

                                <input  type="text" class="form-control" name="pro_book" value="{{$progress->pro_book}}"><br>


                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <button  type="submit" class="btn btn-info">{{ __('Atualizar') }}</button>
                                <a href="JavaScript:window.history.back();"><button  type="button" class="btn btn-primary">
                                        {{ __('Cancelar') }}
                                    </button></a>

                                </div>
                        </div>
                        </form>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <form action="/delete_progress/admin_access/{{$progress->pro_id}}" method="DELETE">

                                <button  type="submit" class="btn btn-danger">{{ __('Deletar') }}</button>

                                </form>

                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
    <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>

@endsection












