<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel_cms";

use Illuminate\Support\Facades\Auth;

require_once 'db_connect/db_cred.php';

?>
        <!DOCTYPE html>
<html lang="pt-br"  nofocus>
<head>
    <title>Hertz System</title>

    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css">

    <link rel="stylesheet" type="text/css" href="css/txtsBuscas.css">
    <link rel="stylesheet" type="text/css" href="css/minhasTabelas.css">

    <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />
    <style>

        html {
            overflow-y: scroll;
        }

        body{
            font-family: Arial;
        }

        .separator{
            margin: 100px 0 !important;
            clear: both;
        }

        [class*="title-"] {
            margin-bottom: 20px;
        }

        .toggle-markup-example {
            margin: 25px 0;
        }


        /**{*/
        /*margin: 10px;*/
        /*padding: -5px;*/
        /*}*/
        /**{*/
        /*margin: auto;*/
        /*padding: 0;*/
        /*}*/









    </style>
</head>
<body>

<header class="header" role="banner">
    <div class="container">
        <a href="{{ route('logout') }}"  class="help-suggestions ico-help-circle hidden-xs" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Desconectar') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</header>

<main class="main">
    <div class="container">
        <div >Bem vindo professor(a) {{explode(' ', Auth::user()->usr_name)[0]}} ao <strong>Hertz System</strong> !</div>
        <hr>
        <div class="element-example">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#my_times" data-toggle="tab">Meus Horários</a></li>
                <li ><a href="#reserve" data-toggle="tab">Reservar</a></li>
                <li ><a href="#general" data-toggle="tab">Agendamentos e Reservas</a></li>
                <li ><a href="#register" data-toggle="tab">Cadastrar Aluno</a></li>
                <li ><a href="#list_registers" data-toggle="tab">Pesquisar Cadastro</a></li>
            </ul>









            <div class="tab-content">




                <div class="tab-pane active in" id="my_times">

                    <?php



                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $usr_id=Auth::user()->usr_id;

                    //                    $query = "select rsv_week_day, rsv_start_time, rsv_end_time rsv_students, rsv_instrument,rsv_unit, rsv_class from reserves
                    //                    where rsv_teacher_code='$teacher_code';";
                    $query = "select distinct unt_name, r.unt_id, rsv_class, rsv_week_day, rsv_start_time, rsv_end_time from reserves r
inner join units u inner join courses c where r.crs_id=c.crs_id and r.unt_id=u.unt_id and rsv_teacher_id=$usr_id;";
                    $con1=$conn->query($query);

                    ?>



                    <div id="dvTabela" class="table-responsive">



                        <table id='minhaTabela9'>
                            <thead>

                            <tr>
                                <th style="text-align: center">Unidade</th>
                                <th style="text-align: center">Sala</th>
                                <th style="text-align: center">Dia da Semana</th>
                                <th style="text-align: center">Hora Inicial</th>
                                <th style="text-align: center">Hora Final</th>
                                <th style="text-align: center">Minha Comissão</th>
                                <th style="text-align: center">Aluno(s)</th>


                            <tr>
                            </thead>


                            <tbody id="tbody3">
                            <?php
                            $contador=1;
                            $soma_minha_comissao=0;
                            while($dados=$con1->fetch_array() ){?>
                            <tr>
                                <td> <?php echo $dados ["unt_name"];?> </td>
                                <td> SALA <?php echo $dados ["rsv_class"];?> </td>
                                <td> <?php echo $dados ["rsv_week_day"];?></td>
                                <td> <?php echo $dados ["rsv_start_time"];?></td>
                                <td> <?php echo $dados ["rsv_end_time"];?></td>
                                <td>

                                <?php
                                $conn3 = new mysqli($servername, $username, $password, $dbname);

                                $unt_name=$dados['unt_name'];
                                $rsv_class=$dados['rsv_class'];
                                $rsv_week_day=$dados['rsv_week_day'];
                                $rsv_start_time=$dados['rsv_start_time'];
                                $rsv_end_time=$dados['rsv_end_time'];

                                $query3 = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$rsv_class and rsv_week_day='$rsv_week_day' and rsv_start_time='$rsv_start_time' and rsv_end_time='$rsv_end_time' and rsv_teacher_id=$usr_id;";
                                $con3=$conn3->query($query3);

                                ?>

                                <?php while($dados3=$con3->fetch_array() ){?>
                                <?php if($dados3['total']!= NULL){?>
                                R$ <?php echo $dados3["total"]*Auth::user()->usr_commission; ?>.00
                                    <?php $soma_minha_comissao+=($dados3["total"]*Auth::user()->usr_commission); ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></td>


                                <td>

                                    <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalMyStudents{{$contador}}">
                                        EXIBIR
                                    </button>


                                    <div class="modal fade" id="modalMyStudents{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">ALUNOS DESTE HORÁRIO</h4>

                                                </div>
                                                <div class="modal-body">

                                                    <?php



                                                    $conn2 = new mysqli($servername, $username, $password, $dbname);
                                                    $unt_id=$dados['unt_id'];
                                                    $rsv_class=$dados['rsv_class'];
                                                    $rsv_week_day=$dados['rsv_week_day'];
                                                    $rsv_start_time=$dados['rsv_start_time'];
                                                    $rsv_end_time=$dados['rsv_end_time'];






                                                    $query2 = "select rsv_id, usr_name, usr_code_user, crs_name, rst_name, rsv_payment from users inner join reserves r inner join courses c inner join reserve_types rt
                                                               where unt_id=$unt_id
                                                               and   rsv_class='$rsv_class'
                                                               and   rsv_week_day='$rsv_week_day'
                                                               and   rsv_start_time='$rsv_start_time'
                                                               and   rsv_end_time='$rsv_end_time'
                                                               and   r.crs_id=c.crs_id
                                                               and   r.rst_id=rt.rst_id
                                                               and   rsv_student_id=usr_id;";
                                                    $con2=$conn2->query($query2);

                                                    ?>



                                                        <table id='minhaTabela10'>
                                                            <thead>

                                                            <tr>
                                                                <th style="text-align: center">Aluno</th>
                                                                <th style="text-align: center">Código</th>
                                                                <th style="text-align: center">Curso</th>
                                                                <th style="text-align: center">Tipo de Reserva</th>
                                                                <th style="text-align: center">Mensalidade</th>
                                                                <th style="text-align: center">Andamento</th>


                                                            <tr>
                                                            </thead>


                                                            <tbody id="tbody2">
                                                            <?php

                                                            while($dado=$con2->fetch_array() ){?>
                                                            <tr>
                                                                <td> {{explode(' ', $dado["usr_name"])[0]}} </td>
                                                                <td> <?php echo $dado ["usr_code_user"];?> </td>
                                                                <td> <?php echo $dado ["crs_name"];?></td>
                                                                <td> <?php echo $dado ["rst_name"];?></td>
                                                                <td>
                                                                    <?php if($dado['rsv_payment']!= NULL){ ?>
                                                                    R$ <?php echo $dado ["rsv_payment"];?>
                                                                    <?php }else{ ?>
                                                                        -
                                                                        <?php }?>

                                                                </td>
                                                                <td>

                                                                    <?php
                                                                    $connn = new mysqli($servername, $username, $password, $dbname);
                                                                    $rsv_id=$dado["rsv_id"];

                                                                    $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                                    $con3=$connn->query($queryy);

                                                                    ?>

                                                                    <?php if($con3->num_rows==0){?>

                                                                    <a href="/create_progress/my_student/{{$rsv_id}}"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                                    <?php }else{ ?>
                                                                        <a href="/content/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
                                                                    <?php }?>

                                                                </td>




                                                            </tr>
                                                            <?php }?>
                                                            </tbody>


                                                        </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <?php $contador+=1; }?>
                            <tr>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: yellow"><strong><h4>Total</h4></strong></td>
                                <td style="background: #5cd08d; color: #1c7430">
                                    <strong><h4><?php
                                    $conn4 = new mysqli($servername, $username, $password, $dbname);

                                    $teacher_id= Auth::user()->usr_id;

                                    $query4 = "select sum(rsv_payment)*usr_commission as total from reserves inner join users where rsv_teacher_id=usr_id and rsv_teacher_id=$teacher_id;";
                                    $con4=$conn4->query($query4);

                                    ?>

                                    <?php while($dados4=$con4->fetch_array() ){?>
                                    <?php if($dados4['total']!= NULL){?>
                                    R$ <?php echo $dados4['total']; ?>
                                    <?php }else{?>
                                    -
                                    <?php }?>
                                    <?php }?></h4></strong>

                                </td>
                                <td style="background: #2e6da4"></td>


                            </tr>
                            </tbody>


                        </table>





                    </div>
                </div>



                <div class="tab-pane" id="reserve">

                    <style type="text/css">
                        .carregando{
                            color: #ff0000;
                            display: none;
                        }

                    </style>


                    {{--<script type="text/javascript" src="https://www.google.com/jsapi"></script>--}}

                    {{--<script type="text/javascript">--}}
                    {{--google.load("jquery","1.4.2");--}}
                    {{--</script>--}}

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    {{--<script src="js/select_options/code_teacher_for_name_teacher.js"> </script>--}}
                    {{--<script src="js/select_options/code_student_for_name_student.js"> </script>--}}
                    <script src="js/select_options/unit_name_for_unit_classes.js"> </script>
                    <script src="js/select_options/course_name_for_course_payment.js"> </script>



                    <form action="/reserve_for_teacher" method="POST">
                    @csrf


                    <div class="row">

                        <div class="form-group col-lg-2">
                            <label for="">Aluno</label>
                            <select  id="code_student" name="rsv_student_id" class="ls-select" style="width:350px" required>
                                <option value="">Selecione...</option>
                                <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "SELECT * from users where usr_role='aluno';";
                                $con1=$conn->query($query);

                                ?>
                                <?php while($dados=$con1->fetch_array() ){?>
                                <option value="<?php echo $dados["usr_id"];?>"><?php echo $dados ["usr_code_user"];?> - <?php echo $dados ["usr_name"];?></option>
                                <?php }?>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-3">
                            <label for="name02">Dia da Semana</label>
                            <select name="rsv_week_day" class="form-control" required>
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

                        <div class="form-group col-lg-2">
                            <label for="">Unidade</label>
                            <select id="unit_name" name="unt_id" class="form-control" required>
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


                        <div class="form-group col-lg-2">
                            <label for="name02">Sala</label>
                            <select id="unit_classes"  name="rsv_class" class="form-control" required>
                                <option value="">-----</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-2">
                            <label for="name02">Hora Inicial</label>
                            <input id="rsv_start_time" type="time"  class="form-control{{ $errors->has('rsv_start_time') ? ' is-invalid' : '' }}" name="rsv_start_time" value="{{ old('rsv_start_time') }}" required>

                            @if ($errors->has('rsv_start_time'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_start_time') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-2">
                            <label for="name02">Hora Final</label>
                            <input id="rsv_end_time" type="time"  class="form-control{{ $errors->has('rsv_end_time') ? ' is-invalid' : '' }}" name="rsv_end_time" value="{{ old('rsv_end_time') }}" required>

                            @if ($errors->has('rsv_end_time'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_end_time') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-4">
                            <label for="name02">Tipo de Reserva</label>
                            <select name="rst_id" class="form-control" required>
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

                        <div class="form-group col-lg-4">
                            <label for="">Curso</label>
                            <select id="course_name" name="crs_id" class="form-control" required>
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

                        <div class="form-group col-lg-3">
                            <label for="name02">Mensalidade</label>
                            <select id="course_payment" name="rsv_payment" class="form-control" required>
                                <option value="">-----</option>
                            </select>
                        </div>

                    </div>



                    <div class="box-actions">
                        <button type="submit" class="btn btn-info">RESERVAR</button>

                    </div>

                    </form>


                </div>







                <div class="tab-pane" id="general">

                    <?php

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "select * from units;";
                    $con1=$conn->query($query);

                    ?>

                    <?php while($dados=$con1->fetch_array() ){?>

                    <div>

                        <h2 class="title-2" id="example-icons">UNIDADE <?php echo $dados['unt_name']; ?></h2>
                        <?php $contador=1;   $final_contagem= $dados['unt_number_classes']+1; ?>
                        <?php while($contador< $final_contagem  ){?>
                        <span ><span aria-hidden="true"  class="ico-calendar"  ></span> <a href="/reserves/teacher_access/{{$dados['unt_name']}}/{{$dados['unt_id']}}/{{$contador}} " target="_blank" style="color: darkblue; font-family: 'Comic Sans MS' ">SALA <?php echo $contador ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <?php $contador+=1; }?>
                    </div>

                    <br>
                    <?php }?>

                </div>





                <div class="tab-pane" id="register">

                    {!! Form::open(['method'=>'POST', 'action'=>'StudentsController@store']) !!}
                    @csrf

                    <div class="row">
                        <div class="form-group col-lg-5">
                            <label for="name02" >Nome <strong style="color: red">*</strong></label>
                            <input id="name"   type="text" placeholder="Ex.: Fulano de Tal" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-2">
                            <label for="name02" >CPF <strong style="color: red">*</strong></label>
                            <input  placeholder="000.000.000-00"  type="cpf" class="form-control cpf-mask {{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>

                            @if ($errors->has('cpf'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-5">
                            <label for="name02">E-mail <strong style="color: red">*</strong></label>
                            <input id="email" type="email" placeholder="exemplo@teste.com.br" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-2">
                            <label for="name02" >Celular <strong style="color: red">*</strong></label>
                            <input  placeholder="(00) 00000-0000"  type="cell_phone"  class="form-control cel-sp-mask {{ $errors->has('cell_phone') ? ' is-invalid' : '' }}" name="cell_phone" value="{{ old('cell_phone') }}" required>

                            @if ($errors->has('cell_phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-2">
                            <label for="name02" >Telefone </label>
                            <input   placeholder="(00) 0000-0000" type="telephone" class="form-control phone-ddd-mask {{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}">

                            @if ($errors->has('telephone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group col-lg-2">
                            <label for="name02" >Estado </label>
                            <input id="state"   type="text" placeholder="Ex.: São Paulo" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}">

                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group col-lg-4">
                            <label for="name02" >Cidade </label>
                            <input id="city"   type="text" placeholder="Ex.: São José dos Campos" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="state" value="{{ old('city') }}" >

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                            @endif
                        </div>



                    </div>


                    <div class="row">

                        <div class="form-group col-lg-5">
                            <label for="name02">Endereço </label>
                            <input id="address" type="address" placeholder="Ex.: Rua José Augusto" class="form-control  {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" >

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-1">
                            <label for="name02">Nº </label>
                            <input id="sonumero" OnKeyPress="return SomenteNumero(event)" type="text" placeholder="Ex:12" maxlength="5" class="form-control number-mask{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" >

                            @if ($errors->has('number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="name02">Bairro </label>
                            <input id="neighborhood" type="neighborhood" placeholder="Ex: Novo Horizonte" class="form-control{{ $errors->has('neighborhood') ? ' is-invalid' : '' }}" name="neighborhood" value="{{ old('neighborhood') }}" >

                            @if ($errors->has('neighborhood'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('neighborhood') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="name02">CEP </label>
                            <input placeholder="00000-000" maxlength="10" type="zip_code" class="form-control cep-mask{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" >

                            @if ($errors->has('zip_code'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-actions">
                        <button type="submit" class="btn btn-primary">Registrar</button>

                    </div>

                    </form>


                </div>








                <div class="tab-pane" id="list_registers">

                    <?php



                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "SELECT * from users where usr_role='Aluno'";
                    $con1=$conn->query($query);

                    ?>



                        <div id="dvTabela" class="table-responsive">



                            <input type="text" id='txtBusca1' placeholder="Buscar por nome, função, email, cpf..." class="  input"  autofocus/>

                            <table id='minhaTabela11'>
                                <thead>

                                <tr>
                                    <th style="text-align: center">Nome</th>
                                    <th style="text-align: center">Código</th>
                                    <th style="text-align: center">E-mail</th>
                                    <th style="text-align: center">CPF</th>
                                    <th style="text-align: center">Celular</th>
                                    <th style="text-align: center">Telefone</th>

                                <tr>
                                </thead>


                                <tbody id="tbody1"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?><br><a href="{{route('students.show', $dados["usr_id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["usr_code_user"];?> </td><td> <?php echo $dados ["usr_email"];?> </td><td> <?php echo $dados ["usr_cpf"];?></td><td> <?php echo $dados ["usr_cell_phone"];?></td><td> <?php echo $dados ["usr_telephone"];?></td></tr><?php }?></tbody>


                            </table>



                        </div>
                </div>
















            </div>
        </div>



    </div>
</main>

<script src="js/txtsBuscas.js"></script>
<script src="js/minhasTabelas.js"></script>
<script src="js/soNumeroNoInput.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
