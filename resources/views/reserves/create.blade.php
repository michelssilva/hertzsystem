<?php
$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>




@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nova Reserva') }}</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST', 'action'=>'ReservesController@store']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Código do Professor') }}</label>

                            <div class="col-md-6">

                                <select id="code_teacher" name="rsv_teacher_code" class="form-control">
                                    <option value="">Selecione...</option>
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from users where usr_role='professor';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_code_user"];?>"><?php echo $dados ["usr_code_user"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Professor') }}</label>

                            <div class="col-md-6">

                                <select  id="name_teacher" name="rsv_teacher_name" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Código do Aluno') }}</label>

                            <div class="col-md-6">

                                <select id="code_student" name="rsv_student_code" class="form-control">
                                    <option value="">Selecione...</option>
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from users where usr_role='aluno';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_code_user"];?>"><?php echo $dados ["usr_code_user"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Aluno') }}</label>

                            <div class="col-md-6">

                                <select  id="name_student" name="rsv_student_name" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Reserva') }}</label>

                            <div class="col-md-6">

                                <select  name="rst_id" class="form-control">
                                    <option value="">Selecione...</option>
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from reserve_types;";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["rst_id"];?>"><?php echo $dados ["rst_name"];?></option>
                                    <?php }?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('UNIDADE') }}</label>

                            <div class="col-md-6">

                                <select id="unit_name" name="unt_id" class="form-control">
                                    <option value="">Selecione...</option>
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from units;";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["unt_id"];?>"><?php echo $dados ["unt_name"];?></option>
                                    <?php }?>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SALA') }}</label>

                            <div class="col-md-6">

                                <select  id="unit_classes"  name="rsv_class" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="rsv_start_time" class="col-md-4 col-form-label text-md-right">{{ __('Hora Inicial') }}</label>

                            <div class="col-md-6">
                                <input id="rsv_start_time" type="time"  class="form-control{{ $errors->has('rsv_start_time') ? ' is-invalid' : '' }}" name="rsv_start_time" value="{{ old('rsv_start_time') }}" required autofocus>

                                @if ($errors->has('rsv_start_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_start_time')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rsv_end_time" class="col-md-4 col-form-label text-md-right">{{ __('Hora Final') }}</label>

                            <div class="col-md-6">
                                <input id="rsv_end_time" type="time"  class="form-control{{ $errors->has('rsv_end_time') ? ' is-invalid' : '' }}" name="rsv_end_time" value="{{ old('rsv_end_time') }}" required autofocus>

                                @if ($errors->has('rsv_end_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_end_time')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Dia da Semana') }}</label>

                            <div class="col-md-6">

                                <select name="rsv_week_day" class="form-control">
                                    <option value="">Selecione...</option>
                                    <option value="SEGUNDA-FEIRA">SEGUNDA-FEIRA</option>
                                    <option value="TERÇA-FEIRA">TERÇA-FEIRA</option>
                                    <option value="QUARTA-FEIRA">QUARTA-FEIRA</option>
                                    <option value="QUINTA-FEIRA">QUINTA-FEIRA</option>
                                    <option value="SEXTA-FEIRA">SEXTA-FEIRA</option>
                                    <option value="SABADO">SÁBADO</option>
                                    <option value="DOMINGO">DOMINGO</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CURSO') }}</label>

                            <div class="col-md-6">

                                <select id="course_name" name="crs_id" class="form-control">
                                    <option value="">Selecione...</option>
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from courses;";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["crs_id"];?>"><?php echo $dados ["crs_name"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SALA') }}</label>

                            <div class="col-md-6">

                                <select  id="course_payment" name="rsv_payment" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="js/select_options/code_teacher_for_name_teacher.js"> </script>
                        <script src="js/select_options/code_student_for_name_student.js"> </script>
                        <script src="js/select_options/unit_name_for_unit_classes.js"> </script>
                        <script src="js/select_options/course_name_for_course_payment.js"> </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
