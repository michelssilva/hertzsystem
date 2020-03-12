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

    <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="css/txtsBuscas.css">
    <link rel="stylesheet" type="text/css" href="css/minhasTabelas.css">



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

        <div >Bem vindo gestor(a) {{explode(' ', Auth::user()->usr_name)[0]}} ao <strong>Hertz System</strong> !</div>
        <hr>
        <div class="element-example">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#register" data-toggle="tab">Cadastrar Usuários</a></li>
                <li ><a href="#register_resources" data-toggle="tab">Recursos</a></li>
                <li ><a href="#units_and_classes" data-toggle="tab">Unidades e Salas</a></li>
                <li ><a href="#reserve" data-toggle="tab">Reservar Aula</a></li>
                <li ><a href="#list_registers" data-toggle="tab">Pesquisar Cadastros</a></li>
                <li ><a href="#reports" data-toggle="tab">Relatórios</a></li>
            </ul>


            <div class="tab-content">








                <div class="tab-pane active in" id="register">

                    {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store']) !!}
                    @csrf


                    {{csrf_field()}}

                    @if(session('error'))
                        <div>{{session('error')}}</div>
                    @endif

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
                            <label for="name02" >Função <strong style="color: red">*</strong></label>
                            <select name="role" class="form-control"  required>
                                <option value="" >-- Selecione --</option>
                                <option value="Administrador">Gestor</option>
                                <option value="Professor">Professor</option>
                                <option value="Aluno">Aluno</option>
                            </select>
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
                        <button type="submit" class="btn btn-info">Cadastrar</button>

                    </div>

                    </form>


                </div>














                <div class="tab-pane" id="register_resources">





                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseOne">
							<h4 class="panel-title">Cadastrar Unidades</h4>

						</span>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! Form::open(['method'=>'POST', 'action'=>'UnitsController@store']) !!}
                                    @csrf

                                    <form role="form" >
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="">Unidade <strong style="color: red">*</strong></label>
                                                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Ex: Centro" required>
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="">Número de Salas <strong style="color: red">*</strong></label>
                                                    <input type="text" class="form-control" id="number_classes" name="number_classes" placeholder="Ex: 5" required>
                                                </div>
                                            </div>

                                            <div class="box-actions">
                                                <button type="submit" class="btn btn-info">Cadastrar</button>
                                                <!-- Modal pequeno -->
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalUnidades">
                                                    Lista de Unidades
                                                </button>

                                                <div class="modal fade" id="modalUnidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Unidades Hertz</h4>

                                                            </div>
                                                            <div class="modal-body">

                                                                <?php



                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                $query = "SELECT * from units";
                                                                $con1=$conn->query($query);

                                                                ?>


                                                                <table id='minhaTabela1'>
                                                                    <thead>

                                                                    <tr>
                                                                        <th style="text-align: center">Unidade</th>
                                                                        <th style="text-align: center">Quantidade de Salas</th>
                                                                    <tr>
                                                                    </thead>


                                                                    <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["unt_name"];?><br><a href="{{route('units.show', $dados["unt_id"])}}"> Editar Unidade </a></td><td> <?php echo $dados ["unt_number_classes"];?></td></tr><?php }?></tbody>


                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>




                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseTwo">
							<h4 class="panel-title">Cadastrar Mensalidades</h4>

						</span>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">

                                    {!! Form::open(['method'=>'POST', 'action'=>'PaymentsController@store']) !!}
                                    @csrf

                                    <form role="form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-lg-3">
                                                    <label for="">Valor de Mensalidade <strong style="color: red">*</strong></label>
                                                    <input type="text" class="form-control" id="value" name="value" placeholder="Ex: R$ 90,00" required>
                                                </div>

                                            </div>

                                            <div class="box-actions">
                                                <button type="submit" class="btn btn-info">Cadastrar</button>
                                                <!-- Modal pequeno -->
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalMensalidades">
                                                    Lista de Mensalidades
                                                </button>

                                                <div class="modal fade" id="modalMensalidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Mensalidades Hertz</h4>

                                                            </div>
                                                            <div class="modal-body">

                                                                <?php



                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                $query = "SELECT * from payments";
                                                                $con1=$conn->query($query);

                                                                ?>


                                                                <table id='minhaTabela2'>
                                                                    <thead>

                                                                    <tr>
                                                                        <th style="text-align: center">Mensalidades</th>

                                                                    <tr>
                                                                    </thead>


                                                                    <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td>R$ <?php echo $dados ["pay_value"];?>,00<br><a href="{{route('payments.show', $dados["pay_id"])}}"> Editar Mensalidade </a></td></tr><?php }?></tbody>


                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseTree">
							<h4 class="panel-title">Cadastrar Cursos</h4>


						</span>
                            </div>
                            <div id="collapseTree" class="panel-collapse collapse">
                                <div class="panel-body">

                                    {!! Form::open(['method'=>'POST', 'action'=>'CoursesController@store']) !!}
                                    @csrf

                                    <form role="form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="">Curso <strong style="color: red">*</strong></label>
                                                    <input type="text" class="form-control" id="course" name="course" placeholder="Ex: Violão" required>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label for="">Mensalidade <strong style="color: red">*</strong></label>
                                                    <select name="pay_id" class="form-control" required>
                                                        <option value="">-- Selecione um valor --</option>
                                                        <?php
                                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                                        $query = "SELECT * from payments";
                                                        $con1=$conn->query($query);

                                                        ?>
                                                        <?php while($dados=$con1->fetch_array() ){?>
                                                        <option value="<?php echo $dados["pay_id"];?>">R$ <?php echo $dados ["pay_value"];?>,00</option>
                                                        <?php }?>

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="box-actions">
                                                <button type="submit" class="btn btn-info">Cadastrar</button>
                                                <!-- Modal pequeno -->
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalCursos">
                                                    Lista de Cursos
                                                </button>

                                                <div class="modal fade" id="modalCursos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Cursos Hertz</h4>

                                                            </div>
                                                            <div class="modal-body">

                                                                <?php

                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                $query = "select c.crs_id, c.crs_name, p.pay_value from courses c inner join payments p
                                                                          where c.pay_id=p.pay_id";
                                                                $con1=$conn->query($query);

                                                                ?>


                                                                <table id='minhaTabela3'>
                                                                    <thead>

                                                                    <tr>
                                                                        <th style="text-align: center">Cursos</th>
                                                                        <th style="text-align: center">Mensalidade</th>
                                                                    <tr>
                                                                    </thead>


                                                                    <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["crs_name"];?><br><a href="{{route('courses.show', $dados["crs_id"])}}"> Editar Curso </a></td><td>R$ <?php echo $dados ["pay_value"];?>,00</td></tr><?php }?></tbody>


                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseFour">
							<h4 class="panel-title">Cadastrar Tipos de Reserva</h4>


						</span>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">

                                    {!! Form::open(['method'=>'POST', 'action'=>'ReserveTypesController@store']) !!}
                                    @csrf

                                    <form role="form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="">Tipo de Reserva <strong style="color: red">*</strong></label>
                                                    <input type="text" class="form-control" id="rst_name" name="rst_name" placeholder="Ex: REPOSIÇÃO" required>
                                                </div>
                                            </div>
                                            <div class="box-actions">
                                                <button type="submit" class="btn btn-info">Cadastrar</button>
                                                <!-- Modal pequeno -->
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalTiposDeReserva">
                                                    Lista de Tipos de Reserva
                                                </button>

                                                <div class="modal fade" id="modalTiposDeReserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Tipos de Reserva</h4>
                                                            </div>
                                                            <div class="modal-body">


                                                                <?php

                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                $query = "select * from reserve_types";
                                                                $con1=$conn->query($query);

                                                                ?>


                                                                <table id='minhaTabela4'>
                                                                    <thead>

                                                                    <tr>
                                                                        <th style="text-align: center">Tipos de Reserva</th>
                                                                    <tr>
                                                                    </thead>


                                                                    <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["rst_name"];?><br><a href="{{route('reserve_types.show', $dados["rst_id"])}}"> Editar </a></td>     </tr><?php }?></tbody>


                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseFive">
							<h4 class="panel-title">Porcentagem de Comissão de Cada Professor</h4>


						</span>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">



                                    <form role="form">
                                        <fieldset>


                                            <div class="box-actions">
                                                <!-- Modal pequeno -->
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modalCommissionTeacher">
                                                    Lista de Professores / Comissão
                                                </button>

                                                <div class="modal fade" id="modalCommissionTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Lista de Professores / Comissão</h4>
                                                            </div>
                                                            <div class="modal-body">

                                                                <?php

                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                $query = "select * from users where usr_role='professor'";
                                                                $con1=$conn->query($query);

                                                                ?>


                                                                <table id='minhaTabela5'>
                                                                    <thead>

                                                                    <tr>
                                                                        <th style="text-align: center">Professor(a)</th>
                                                                        <th style="text-align: center">Código</th>
                                                                        <th style="text-align: center">Porcentagem de Comissão</th>
                                                                    <tr>
                                                                    </thead>


                                                                    <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?></td>  <td><?php echo $dados ["usr_code_user"];?></td> <td><?php echo $dados ["usr_commission"]*100;?>%<br><a href="/edit_commission/{{$dados['usr_id']}}"> Editar </a></td>  </tr><?php }?></tbody>


                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>





                </div>













                <div class="tab-pane" id="units_and_classes">

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
                        <span ><span aria-hidden="true"  class="ico-calendar"  ></span> <a href="/reserves/admin_access/{{$dados['unt_name']}}/{{$dados['unt_id']}}/{{$contador}} " target="_blank" style="color: darkblue; font-family: 'Comic Sans MS' ">SALA <?php echo $contador ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <?php $contador+=1; }?>
                    </div>

                    <br>
                    <?php }?>

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


                    {!! Form::open(['method'=>'POST', 'action'=>'ReservesController@store']) !!}
                    @csrf

                    <div class="row">

                        <div class="form-group col-lg-2">
                            <label for="">Professor</label>
                            <select id="code_teacher" name="rsv_teacher_id" class="ls-select" style="width:350px" required>

                                <option value="">Selecione o Professor...</option>

                                <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "SELECT * from users where usr_role='professor';";
                                $con1=$conn->query($query);

                                ?>
                                <?php while($dados=$con1->fetch_array() ){?>
                                <option value="<?php echo $dados["usr_id"];?>"><?php echo $dados ["usr_code_user"];?> - <?php echo $dados ["usr_name"];?></option>
                                <?php }?>

                            </select>
                        </div>



                    </div>

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












                <div class="tab-pane" id="list_registers">

                    <?php

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "SELECT * from users";
                    $con1=$conn->query($query);

                    ?>



                    <div id="dvTabela" class="table-responsive">

                        <a href="/admin_access/list_users"  target="_blank"><button class="button floatLeft"  style=" padding: 5px 15px; vertical-align: middle; background: #9fcdff; color:white; border-radius:6px; font-size: 20px; font-family:helvetica, serif;text-decoration:none;">Visualização completa</button></a>



                        <input type="text" id='txtBusca1' placeholder="Buscar por nome, função, email, cpf..." class="  input"/>

                        <table id='minhaTabela6'>
                            <thead>

                            <tr>
                                <th>Nome</th>
                                <th>Código</th>
                                <th>Função</th>
                                <th>E-mail</th>
                                <th>CPF</th>
                                <th>Celular</th>
                                <th>Telefone</th>

                            <tr>
                            </thead>


                            <tbody id="tbody1"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?><br><a href="{{route('users.show', $dados["usr_id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["usr_code_user"];?> </td><td> <?php echo $dados ["usr_role"];?> </td><td> <?php echo $dados ["usr_email"];?> </td><td> <?php echo $dados ["usr_cpf"];?></td><td> <?php echo $dados ["usr_cell_phone"];?></td><td> <?php echo $dados ["usr_telephone"];?></td></tr><?php }?></tbody>


                        </table>





                    </div>




                </div>










                <div class="tab-pane" id="reports">


                    <div class="element-example">
                        <div class="ls-collapse">
                            <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseBasicReport">
							<h4 class="panel-title">Relatórios - Rendas Obtidas nas Unidades e Professores</h4>

						</span>
                            </div>
                            <div id="collapseBasicReport" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <?php

                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "select * from units;";
                                    $con1=$conn->query($query);

                                    ?>

                                    <?php while($dados=$con1->fetch_array() ){?>

                                    <div>


                                        <div id="dvTabela">

                                            <table id='minhaTabela7'>
                                                <thead>

                                                <tr>


                                                <tr>
                                                </thead>


                                                <tbody >
                                                <tr>

                                                    <td> <a href="/report_units_return_money/{{$dados['unt_id']}}/{{$dados['unt_name']}}/{{$dados['unt_number_classes']}}"   target="_blank"><h4 class="ico-libreoffice" style="color: #2e6da4" >Relatório - Renda Total Unidade {{$dados['unt_name']}}</h4></a></td>

                                                </tr>
                                                </tbody>


                                            </table>

                                        </div>







                                    </div>




                                    <br>
                                    <br>
                                    <?php }?>

                                    <div id="dvTabela">

                                        <table id='minhaTabela8'>
                                            <thead>

                                            <tr>


                                            <tr>
                                            </thead>


                                            <tbody >
                                            <tr>

                                                <td> <a href="/report_salary_teachers "   target="_blank"><h4 class="ico-libreoffice" style="color: #4c110f" >Relatório - Renda dos Professores e da Escola</h4></a> </td>

                                            </tr>
                                            </tbody>


                                        </table>

                                    </div>








                                </div>
                            </div>
                        </div>
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

<!-- Com esse JavaScript é possível utilizar o recurso de mascaras no Formulário -->
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>

