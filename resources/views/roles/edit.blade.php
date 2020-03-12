@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Função') }}</div>

                    <div class="card-body">
                        {!! Form::model($role,['method'=>'PATCH', 'action'=>['RolesController@update', $role->rle_id]]) !!}
                        @csrf


                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Função') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('rle_name',null,['class'=>'form-control']) !!}<br>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/users">
                                    {!! Form::submit('Atualizar',['class'=>"btn btn-info"]) !!}
                                    {!! Form::close()!!}
                                </a></div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::model($role,['method'=>'DELETE', 'action'=>['RolesController@destroy',$role->rle_id]]) !!}

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












