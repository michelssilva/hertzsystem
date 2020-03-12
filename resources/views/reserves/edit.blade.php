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
                    <div class="card-header">{{ __('Editar Reserva') }}</div>

                    <div class="card-body">
                        {!! Form::model($reserve,['method'=>'PATCH', 'action'=>['ReservesController@update', $reserve->rsv_id]]) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Professor') }}</label>

                            <div class="col-md-8">
                                <select  name="rsv_teacher_id" class="form-control"  required>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from users where usr_id='$reserve->rsv_teacher_id' and usr_role='professor';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_id"];?>"> <?php echo $dados["usr_code_user"];?> - <?php echo $dados["usr_name"];?></option>
                                    <?php }?>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from users where usr_id!='$reserve->rsv_teacher_id' and usr_role='professor';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_id"];?>"> <?php echo $dados["usr_code_user"];?> - <?php echo $dados["usr_name"];?></option>
                                    <?php }?>
                                </select><br>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Aluno') }}</label>

                            <div class="col-md-8">
                                <select  name="rsv_student_id" class="form-control"  required>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from users where usr_id='$reserve->rsv_student_id' and usr_role='aluno';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_id"];?>"> <?php echo $dados["usr_code_user"];?> - <?php echo $dados["usr_name"];?></option>
                                    <?php }?>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from users where usr_id!='$reserve->rsv_student_id' and usr_role='aluno';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["usr_id"];?>"> <?php echo $dados["usr_code_user"];?> - <?php echo $dados["usr_name"];?></option>
                                    <?php }?>
                                </select><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Dia da Semana') }}</label>
                            <div class="col-md-4">
                                <select name="rsv_week_day" class="form-control">
                                    <option value="{{$reserve->rsv_week_day}}">{{$reserve->rsv_week_day}}</option>
                                    <option value="SEGUNDA-FEIRA">SEGUNDA-FEIRA</option>
                                    <option value="TERÇA-FEIRA">TERÇA-FEIRA</option>
                                    <option value="QUARTA-FEIRA">QUARTA-FEIRA</option>
                                    <option value="QUINTA-FEIRA">QUINTA-FEIRA</option>
                                    <option value="SEXTA-FEIRA">SEXTA-FEIRA</option>
                                    <option value="SABADO">SÁBADO</option>
                                    <option value="DOMINGO">DOMINGO</option>
                                </select><br>
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Unidade') }}</label>

                            <div class="col-md-4">
                                <select  name="unt_id" class="form-control"  required>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from units where unt_id='$reserve->unt_id';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["unt_id"];?>"> <?php echo $dados["unt_name"];?></option>
                                    <?php }?>
                                </select><br>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Sala') }}</label>

                            <div class="col-md-3">
                                <select  name="rsv_class" class="form-control"  required>


                                    <option value="{{$reserve->rsv_class}}">SALA {{$reserve->rsv_class}}</option>
                                    <?php

                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from units where unt_id=$reserve->unt_id;";
                                    $con1=$conn->query($query);

                                    ?>

                                    <?php while($dados=$con1->fetch_array() ){?>

                                        <?php $contador=1;   $final_contagem= $dados['unt_number_classes']+1; ?>
                                        <?php while($contador< $final_contagem  ){
                                            if($contador!=$reserve->rsv_class){
                                                echo '<option value="'.$contador.'">SALA '.$contador.'</option>';
                                            }
                                        $contador+=1; }?>

                                    <br>
                                    <?php }?>

                                </select><br>
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="rsv_start_time" class="col-md-3 col-form-label text-md-right">{{ __('Hora Inicial') }}</label>

                            <div class="col-md-3">
                                {!! Form::time('rsv_start_time',null,['class'=>'form-control']) !!}<br>

                            </div>

                            <label for="rsv_end_time" class="col-md-2 col-form-label text-md-right">{{ __('Hora Final') }}</label>

                            <div class="col-md-3">
                                {!! Form::time('rsv_end_time',null,['class'=>'form-control']) !!}<br>
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Tipo de Reserva') }}</label>

                            <div class="col-md-4">
                                <select name="rst_id" class="form-control"  required>
                                    <?php  $conn = new mysqli($servername, $username, $password, $dbname);
                                    $query = "select rst_id, rst_name from reserve_types where rst_id='$reserve->rst_id'";
                                    $con1=$conn->query($query);
                                    while($dados=$con1->fetch_array() ){
                                    ?>

                                    <option value="{{$dados['rst_id']}}">{{$dados['rst_name']}}</option>
                                    <?php }?>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select rst_id, rst_name from reserve_types where rst_id!='$reserve->rst_id';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["rst_id"];?>"> <?php echo $dados["rst_name"];?> </option>
                                    <?php }?>
                                </select><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name02" class="col-md-3 col-form-label text-md-right">{{ __('Curso') }}</label>

                            <div class="col-md-4">
                                <select  name="crs_id" class="form-control"  required>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from courses where crs_id='$reserve->crs_id';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["crs_id"];?>"> <?php echo $dados["crs_name"];?></option>
                                    <?php }?>

                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from courses where crs_id!='$reserve->crs_id';";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados["crs_id"];?>"> <?php echo $dados["crs_name"];?></option>
                                    <?php }?>
                                </select><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rsv_start_time" class="col-md-3 col-form-label text-md-right">{{ __('Mensalidade') }}</label>

                            <div class="col-md-3">
                                <input type="text" name="rsv_payment" class="form-control" value="{{$reserve->rsv_payment}}">
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
                                {!! Form::model($reserve,['method'=>'DELETE', 'action'=>['ReservesController@destroy',$reserve->rsv_id]]) !!}
                                {!! Form::submit('Deletar',['class'=>"btn btn-danger"]) !!}
                                {!! Form::close()!!}
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/select_options/code_teacher_for_name_teacher.js"> </script>
        <script src="js/select_options/code_student_for_name_student.js"> </script>
        <script src="js/select_options/unit_name_for_unit_classes.js"> </script>
        <script src="js/select_options/course_name_for_course_payment.js"> </script>




@endsection












