@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alterar senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/forgot_password') }}">
                        @csrf


                        @if(session('error'))
                            <div>{{session('error')}}</div>
                        @endif

                        @if(session('success'))
                            <div>{{ session('success') }}</div>
                        @endif

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="usr_email" type="email" placeholder="Insira aqui seu E-mail" class="form-control{{ $errors->has('usr_email') ? ' is-invalid' : '' }}" name="email" value="{{ old('usr_email') }}" required>

                                @if ($errors->has('usr_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('usr_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar link de alteração de senha') }}
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
