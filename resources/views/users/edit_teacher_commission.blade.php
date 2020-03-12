@extends('layouts.app')




@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Porcentagem de Comissão - Professor(a)') }} {{explode(' ', $teacher->usr_name)[0]}}</div>

                    <div class="card-body">
                        <form action="/update_commission/{{$teacher->usr_id}}" method="PATCH" >

                            @csrf


                            <div class="form-group row">
                                <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Porcentagem de Comissão') }}</label>


                                <div class="col-md-6">

                                    <select name="usr_commission" class="form-control">


                                        <option value="{{$teacher->usr_commission}}">{{$teacher->usr_commission*100}}%</option>
                                        <option value="">Selecione uma porcentagem abaixo...</option>
                                        <option value="0.1">10%</option>
                                        <option value="0.2">20%</option>
                                        <option value="0.3">30%</option>
                                        <option value="0.4">40%</option>
                                        <option value="0.5">50%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.7">70%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.9">90%</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button  type="submit" class="btn btn-info">{{ __('Atualizar') }}</button>
                                    <a href="JavaScript:window.history.back();"><button  type="button" class="btn btn-primary">
                                            {{ __('Cancelar') }}
                                        </button></a>

                                </div>
                            </div>
                        </form>

                        <br>


                    </div>
                </div>
            </div>
        </div>


</div>
@endsection












