@extends('layouts.app')




@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Andamento') }}</div>

                    <div class="card-body">
                        {!! Form::model($progress,['method'=>'PATCH', 'action'=>['ProgressController@update', $progress->pro_id]]) !!}
                        @csrf


                        <div class="form-group row">
                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('pro_lesson',null,['class'=>'form-control']) !!}<br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('pro_data',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Conteudo') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('pro_content',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cell_phone" class="col-md-4 col-form-label text-md-right">{{ __('Material') }}</label>

                            <div class="col-md-6">

                                {!! Form::text('pro_book',null,['class'=>'form-control']) !!}<br>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    {!! Form::submit('Atualizar',['class'=>"btn btn-info"]) !!}
                                    {!! Form::close()!!}
                                <a href="JavaScript:window.history.back();"><button  type="button" class="btn btn-primary">
                                        {{ __('Cancelar') }}
                                    </button></a>

                                </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                {!! Form::model($progress,['method'=>'DELETE', 'action'=>['ProgressController@destroy',$progress->pro_id, $progress->pro_student_code]]) !!}

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












