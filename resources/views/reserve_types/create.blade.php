
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar novo tipo de Reserva') }}</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST', 'action'=>'ReserveTypesController@store']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="rst_name" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Reserva') }}</label>

                            <div class="col-md-6">
                                <input id="rst_name" type="text" placeholder="Ex: REPOSIÇÃO" class="form-control{{ $errors->has('rst_name') ? ' is-invalid' : '' }}" name="rst_name" value="{{ old('rst_name') }}" required autofocus>

                                @if ($errors->has('rst_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rst_name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
