@extends('layouts.app')
<style>

    body,html {
        background-image: url('images/musica--partituras_6978_1600x1200.jpg');
        height: 100%;
    }

    #profile-img {
        height:180px;
    }
    .h-80 {
        height: 80% !important;
    }


</style>
@section('content')
    <div id="fundo-externo">
        <div id="fundo">
            <img src="http://flickholdr.com/1600/1200/sunset" alt="" />
        </div>
<div class="container">
    <br>
    <br>
    <br>

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hertz Music School') }}</div>



                <div class="card-body">
                    <form method="POST" action="{{ route('login_user') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar senha') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))

                                    <a class="btn btn-link" href="/forgot_password">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}





                                @endif


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
