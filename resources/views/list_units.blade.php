@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">UNIDADES HERTZ</div>
                    <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/reserva_centro">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Unidade Centro') }}
                                    </button></a>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/reserva_morumbi">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Unidade Morumbi') }}
                                    </button></a>
                            </div>
                        </div>
                    <br>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/reserva_pub">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Unidade Pub') }}
                                    </button></a>
                            </div>
                        </div>
                    <br>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection