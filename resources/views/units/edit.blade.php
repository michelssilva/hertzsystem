@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Unidade') }}</div>

                    <div class="card-body">
                        {!! Form::model($unit,['method'=>'PATCH', 'action'=>['UnitsController@update', $unit->unt_id]]) !!}
                        @csrf


                        <div class="form-group row">
                            <label for="unit" class="col-md-4 col-form-label text-md-right">{{ __('Unidade') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('unt_name',null,['class'=>'form-control']) !!}<br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_classes" class="col-md-4 col-form-label text-md-right">{{ __('Número de Salas') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('unt_number_classes',null,['class'=>'form-control']) !!}<br>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/home">
                                    {!! Form::submit('Atualizar',['class'=>"btn btn-info"]) !!}
                                    {!! Form::close()!!}
                                </a>
                                <a href="/home">
                                    {!! Form::button('Cancelar',['class'=>"btn btn-outline-secundary"]) !!}
                                    {!! Form::close()!!}
                                </a>

                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::model($unit,['method'=>'DELETE', 'action'=>['UnitsController@destroy',$unit->unt_id]]) !!}

                                {!! Form::submit('Deletar',['class'=>"btn btn-danger"]) !!}

                                {!! Form::close()!!}
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection












