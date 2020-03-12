@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Cadastro do Aluno') }}</div>

                    <div class="card-body">
                        {!! Form::model($user,['method'=>'PATCH', 'action'=>['StudentsController@update', $user->usr_id]]) !!}
                        @csrf


                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('usr_name',null,['class'=>'form-control']) !!}<br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_email',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_cpf',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cell_phone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_cell_phone',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_telephone',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_state',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_city',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_address',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('N º') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_number',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="neighborhood" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('usr_neighborhood',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip_code" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('usr_zip_code',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/students">
                                    {!! Form::submit('Atualizar',['class'=>"btn btn-info"]) !!}
                                    {!! Form::close()!!}
                                </a>
                                <a href="JavaScript:window.history.back();"><button  type="button" class="btn btn-primary">
                                        {{ __('Cancelar') }}
                                    </button></a>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::model($user,['method'=>'DELETE', 'action'=>['StudentsController@destroy',$user->usr_id]]) !!}

                                {!! Form::submit('Deletar',['class'=>"btn btn-danger"]) !!}

                                {!! Form::close()!!}
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection












