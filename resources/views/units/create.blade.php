
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar nova unidade') }}</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST', 'action'=>'UnitsController@store']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="unit" class="col-md-4 col-form-label text-md-right">{{ __('Unidade') }}</label>

                            <div class="col-md-6">
                                <input id="unit" type="text" placeholder="Ex:Centro" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{ old('unit') }}" required autofocus>

                                @if ($errors->has('unit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unit')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_classes" class="col-md-4 col-form-label text-md-right">{{ __('Número de Salas') }}</label>

                            <div class="col-md-6">
                                <input id="number_classes" type="text" placeholder="Ex: 5" class="form-control{{ $errors->has('number_classes') ? ' is-invalid' : '' }}" name="number_classes" value="{{ old('number_classes') }}" required autofocus>

                                @if ($errors->has('number_classes'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number_classes')}}</strong>
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
