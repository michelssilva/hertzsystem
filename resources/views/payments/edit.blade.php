@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Mensalidade') }}</div>

                    <div class="card-body">
                        {!! Form::model($payment,['method'=>'PATCH', 'action'=>['PaymentsController@update', $payment->pay_id]]) !!}
                        @csrf


                        <div class="form-group row">
                            <label for="pay_value" class="col-md-4 col-form-label text-md-right">{{ __('Mensalidade') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('pay_value',null,['class'=>'form-control']) !!}<br>
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
                                {!! Form::model($payment,['method'=>'DELETE', 'action'=>['PaymentsController@destroy',$payment->pay_id]]) !!}

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












