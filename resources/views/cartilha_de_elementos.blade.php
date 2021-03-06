<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel_cms";

use Illuminate\Support\Facades\Auth;
$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>
<!DOCTYPE html>
<html lang="pt-br" class="color-green" nofocus>
<head>
    <title>Cartilha de elementos do Locaweb Style</title>

    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css">

    <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />
    <style>
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
    </style>
</head>
<body>

<header class="header" role="banner">
    <div class="container">
        <span class="control-menu visible-xs ico-menu-2"></span>
        <span class="control-sidebar visible-xs ico-list"></span>
        <h1 class="project-name"><a href="#">Nome do sistema</a></h1>
        <a href="#" class="help-suggestions ico-help-circle hidden-xs">Ajuda e Sugestões</a>

        <div class="dropdown hidden-xs">
            <a href="#" data-toggle="dropdown" class="title-dropdown">emkt2013</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="#" role="menuitem">Option 1</a></li>
                <li><a href="#" role="menuitem">Option 2</a></li>
                <li><a href="#" role="menuitem">Option 3</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="nav-content">
    <menu class="menu">
        <ul class="container">
            <li><a href="#" class="active ico-home" role="menuitem">Home</a></li>
            <li><a href="#" role="menuitem">Lista de contatos</a></li>
            <li><a href="#" role="menuitem">Mensagens</a>
                <ul>
                    <li><a href="#">Enviar</a></li>
                    <li><a href="#">Criar</a></li>
                    <li><a href="#">Editar</a></li>
                    <li><a href="#">Relatórios</a></li>
                </ul>
            </li>
            <li><a href="#" role="menuitem">Campanhas</a></li>
            <li><a href="#" role="menuitem">Templates</a></li>
            <li><a href="#" role="menuitem">Relatórios</a></li>
            <li><a href="#" role="menuitem">Configurações</a></li>
        </ul>
    </menu>
    <h2 class="title-sep visible-xs">Mais</h2>
    <ul class="nav-mob-list visible-xs">
        <li><a href="#" class="ico-help-circle">Ajuda e sugestões</a></li>
    </ul>
</div>

<main class="main">
    <div class="container">
        <span class="bg-shortcut-workaround" style="height: 324px;"></span>

        <div class="content" role="main">

            <div class="shortcut-box">
                <header class="header-content">
                    <h1 class="title-2">Comece a usar seu sistema aqui</h1>
                    <p class="hidden-xs">It is a long established fact that a reader will be distracted</p>
                </header>
                <div class="shortcuts">
                    <div class="col-md-4 col-xs-4">
                        <a href="#"><h2 class="shortcut-title ico-user">Cadastre seus contatos</h2></a>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <a href="#"><h2 class="shortcut-title ico-download">Crie e Envie mensagens</h2></a>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <a href="#"><h2 class="shortcut-title ico-flag">Acompanhe os resultados</h2></a>
                    </div>
                </div>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-progress-bar">Barra de progresso</h2>
            <div class="element-example">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        <span class="sr-only">40% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span>60% Complete</span>
                    </div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <span class="sr-only">25% Complete</span>
                    </div>
                </div>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-tooltip">Tooltips</h2>
            <p>Passe o mouse para ver:</p>
            <div class="element-example">
                <button class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Esquerda">Esquerda</button>
                <button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="em Cima">em Cima</button>
                <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="em Baixo">em Baixo</button>
                <button class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Direita">Direita</button>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-carousel">Carousel</h2>

            <div class="element-example">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://31.media.tumblr.com/6c5d3876dd9858685cc8b584503101b1/tumblr_mve3kz3WG21st5lhmo1_1280.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>Primeiro Slide</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://24.media.tumblr.com/23e3f4bb271b8bdc415275fb7061f204/tumblr_mve3rvxwaP1st5lhmo1_1280.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>Segundo Slide</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://31.media.tumblr.com/098217f18533a8971385d0c59004d810/tumblr_muuj37kqN21st5lhmo1_1280.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>Terceiro Slide</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="ico-direction-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="ico-direction-right"></span>
                    </a>
                </div>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-breadcrumb">Breadcrumb</h2>
            <div class="element-example">
                <!-- Breadcrumb com 3 itens -->
                <ol class="breadcrumb container">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Mensagens</a></li>
                    <li class="active">Enviar</li>
                </ol>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-popover">Popover</h2>
            <p>Clique nos botões para ver:</p>

            <div class="element-example">
                <p>
                    <button data-container="body" data-toggle="popover" data-placement="left" class="btn btn-default" data-content="Um texto bem legal a esquerda.">esquerda</button>
                    <button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="Um texto bem legal em cima.">topo</button>
                    <button data-container="body" data-toggle="popover" data-placement="bottom" class="btn btn-default" data-content="Um texto bem legal em baixo.">baixo</button>
                    <button data-container="body" data-toggle="popover" data-placement="right" class="btn btn-default" data-content="Um texto bem legal a direita.">direita</button>
                </p>
                <p>
                    <button class="btn btn-danger" data-container="body" data-inherit="background-color" data-toggle="popover" data-placement="top" data-content="Um texto bem legal e bonito por aqui." data-title="Título">Top herdando a cor</button>
                    <button class="btn btn-info" data-container="body" data-inherit="background-color" data-toggle="popover" data-placement="top" data-html="true" data-content="Um texto e um <a href='#'>link colorido</a>." data-title="Título">Top herdando a cor, com link</button>
                    <button class="btn btn-warning" data-container="body" data-inherit="background-color" data-inherit-apply="background" data-toggle="popover" data-placement="top" data-html="true" data-content="Um texto e um <a href='#'>link colorido</a>." data-title="Título">Cor no background</button>
                </p>
                <p>
                    <button class="btn label" style="color: navy;" data-container="body" data-inherit="color" data-toggle="popover" data-placement="bottom" data-content="Um texto bem legal e bonito por aqui." data-title="Título">label</button>
                    <span class="label label-warning" data-container="body" data-inherit="background-color" data-toggle="popover" data-placement="right" data-content="Um texto bem legal e bonito por aqui." data-title="Título">label</span>
                    <a href="#" class="ico-question" data-container="body" data-inherit="background-color" data-toggle="popover" data-placement="left" data-content="Um texto bem legal e bonito por aqui." data-title="Título"></a>
                </p>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-well">Boxes Genéricos</h2>
            <div class="element-example">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-lg">
                            Texto de exemplo
                        </div>
                        <div class="well well-sm">
                            Texto de exemplo
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="well well-lg no-bg">
                            Texto de exemplo
                        </div>
                        <div class="well well-sm no-bg">
                            Texto de exemplo
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="well arrow-up">
                            texto
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well arrow-up no-bg">
                            texto
                        </div>
                    </div>
                </div>

            </div>

            <hr class="separator">

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

                        <div class="row">
                            <div class="form-group col-lg-5">
                                <label for="name02" >Nome</label>
                                <input id="name"   type="text" placeholder="Ex.: Fulano de Tal" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >CPF</label>
                                <input  placeholder="000.000.000-00"  type="cpf" class="form-control cpf-mask {{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >Celular</label>
                                <input  placeholder="(00) 00000-0000"  type="cell_phone"  class="form-control cel-sp-mask {{ $errors->has('cell_phone') ? ' is-invalid' : '' }}" name="cell_phone" value="{{ old('cell_phone') }}" required>

                                @if ($errors->has('cell_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >Telefone</label>
                                <input   placeholder="(00) 0000-0000" type="telephone" class="form-control phone-ddd-mask {{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group col-lg-7">
                                <label for="name02">E-mail</label>
                                <input id="email" type="email" placeholder="exemplo@teste.com.br" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="name02" ></label>
                                <select name="role" class="form-control"  required>
                                    <option value="" >-- Selecione --</option>
                                    <option value="Administrador">Gestor</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Aluno">Aluno</option>
                                </select>
                            </div>



                        </div>
                        <div class="row">

                            <div class="form-group col-lg-4">
                                <label for="name02">Endereço</label>
                                <input id="address" type="address" placeholder="Ex.: Rua José Augusto" class="form-control  {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-1">
                                <label for="name02">Nº</label>
                                <input id="sonumero" OnKeyPress="return SomenteNumero(event)" type="text" placeholder="Ex:12" maxlength="5" class="form-control number-mask{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required>

                                @if ($errors->has('number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="name02">Bairro</label>
                                <input id="neighborhood" type="neighborhood" placeholder="Ex: Novo Horizonte" class="form-control{{ $errors->has('neighborhood') ? ' is-invalid' : '' }}" name="neighborhood" value="{{ old('neighborhood') }}" required>

                                @if ($errors->has('neighborhood'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('neighborhood') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="name02">CEP</label>
                                <input placeholder="00000-000" maxlength="10" type="zip_code" class="form-control cep-mask{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" required>

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


                                                                        <tbody id="tbody" style="font-family: Arial"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?></td>  <td><?php echo $dados ["usr_code_user"];?></td> <td><?php echo $dados ["usr_commission"];?><br><a href="/edit_commission/{{$dados['usr_id']}}"> Editar </a></td>  </tr><?php }?></tbody>


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
                                    <th>Endereço</th>
                                    <th>Número</th>
                                    <th>Bairro</th>
                                    <th>CEP</th>

                                <tr>
                                </thead>


                                <tbody id="tbody1"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?><br><a href="{{route('users.show', $dados["usr_id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["usr_code_user"];?> </td><td> <?php echo $dados ["usr_role"];?> </td><td> <?php echo $dados ["usr_email"];?> </td><td> <?php echo $dados ["usr_cpf"];?></td><td> <?php echo $dados ["usr_cell_phone"];?></td><td> <?php echo $dados ["usr_telephone"];?></td><td> <?php echo $dados ["usr_address"];?></td><td> <?php echo $dados ["usr_number"];?></td><td> <?php echo $dados ["usr_neighborhood"];?></td><td> <?php echo $dados ["usr_zip_code"];?></td></tr><?php }?></tbody>


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

                                                    <td> <a href="/report_salary_teachers "   target="_blank"><h4 class="ico-libreoffice" style="color: #4c110f" >Relatório - Renda dos Professores e da Escola</h4></a></td>

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


            <hr class="separator">

            <h2 class="title-2" id="example-tables">Tabela</h2>
            <div class="element-example">
                <div class="table-responsive">
                    <div class="well hidden well-sm clearfix" data-target="tabela1">
                        <p class="d-inline-block">
                            <strong class="counterChecks">0</strong> itens selecionados
                        </p>
                        <div class="actions">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Duplicar</button>
                                <a href="#" class="btn btn-default">Relatorio</a>
                                <a href="#" class="btn btn-default">Arquivar</a>
                            </div>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                    <table class="table ls-table" id="tabela1">
                        <thead>
                        <tr>
                            <th class="txt-center"><input type="checkbox"></th>
                            <th>Título</th>
                            <th class="hidden-xs">Campanha</th>
                            <th>Status</th>
                            <th class="hidden-xs">Data de envio</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="txt-center"><input type="checkbox"></td>
                            <td><a href="" title="">Mensagem Teste Locastyle 0</a></td>
                            <td class="hidden-xs">Campanha 0</td>
                            <td>Enviada</td>
                            <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                        </tr>

                        <tr>
                            <td class="txt-center"><input type="checkbox"></td>
                            <td><a href="" title="">Mensagem Teste Locastyle 1</a></td>
                            <td class="hidden-xs">Campanha 1</td>
                            <td>Enviada</td>
                            <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                        </tr>

                        <tr>
                            <td class="txt-center"><input type="checkbox"></td>
                            <td><a href="" title="">Mensagem Teste Locastyle 2</a></td>
                            <td class="hidden-xs">Campanha 2</td>
                            <td>Enviada</td>
                            <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                        </tr>

                        <tr>
                            <td class="txt-center"><input type="checkbox"></td>
                            <td><a href="" title="">Mensagem Teste Locastyle 3</a></td>
                            <td class="hidden-xs">Campanha 3</td>
                            <td>Enviada</td>
                            <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-collapse">Collapses</h2>
            <div class="element-example">
                <div class="ls-collapse">
                    <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseOne">
							<h4 class="panel-title">Exemplo de layout com formulário</h4>
							<p>Você pode colocar formulários da maneira que quiser aqui dentro.</p>
						</span>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Um formulário de cadastro:</p>
                            <form role="form">
                                <fieldset>
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="">Campo simples</label>
                                            <input type="text" class="form-control" id="" placeholder="Insira seu texto aqui">
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <label for="">Campo simples</label>
                                            <input type="text" class="form-control" id="" placeholder="Insira seu texto aqui">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Seletor</label>
                                            <select class="form-control">
                                                <option value="">Selecione algo</option>
                                                <option value="">Opção 1</option>
                                                <option value="">Opção 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Seletor</label>
                                            <select class="form-control">
                                                <option value="">Selecione algo</option>
                                                <option value="">Opção 1</option>
                                                <option value="">Opção 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="">Senha</label>
                                            <input type="password" class="form-control" id="" placeholder="senha">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" id="" placeholder="Insira seu emai aqui">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="">Data</label>
                                            <input type="date" class="form-control" id="" placeholder="Insira seu emai aqui">
                                        </div>
                                    </div>
                                    <div class="box-actions">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button class="btn btn-danger">Cancelar</button>
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
                        <a data-toggle="collapse" href="#collapseTwo">
                            <h4 class="panel-title">Um exemplo simples com texto</h4>
                            <p>Se tiver só texto, o negócio funciona que é uma beleza.</p>
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h3>Fernando Pessoa</h3>
                            <p>
                                Batatinha quando nasce espalha a rama pelo chão. Menininha quando dorme põe a mão no coração. Sou pequenininha do tamanho de um botão, carrego papai no bolso e mamãe no coração. O bolso furou e o papai caiu no chão. Mamãe que é mais querida ficou no coração.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element-example">
                <form role="form">
                    <div class="panel-group" id="formularioSteps">
                        <!-- Passo 1 -->
                        <div class="panel panel-default ls-collapse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Formulário em etapas - 1</h4>
                                <p>Descrição do passo 1</p>
                            </div>
                            <div id="passo1" class="panel-collapse collapse in">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Campo simples</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu texto aqui">
                                    </div>
                                    <div class="box-actions">
                                        <button class="btn" data-toggle="collapse" data-parent="#formularioSteps" data-target="#passo2" type="button">Ir para o passo 2</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Passo 2 -->
                        <div class="panel panel-default ls-collapse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Formulário em etapas - 2</h4>
                                <p>Descrição do passo 2</p>
                            </div>
                            <div id="passo2" class="panel-collapse collapse">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelect">Seletor</label>
                                        <select id="exampleSelect" class="form-control">
                                            <option value="">Escolha uma opção</option>
                                            <option value="">Isso mesmo :D</option>
                                        </select>
                                    </div>
                                    <div class="box-actions">
                                        <button class="btn" data-toggle="collapse" data-parent="#formularioSteps" data-target="#passo1" type="button">Voltar ao passo 1</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-alerts">Alertas</h2>
            <div class="element-example">
                <div class="alert alert-success"><p><strong>Sucesso!</strong> Você conseguiu, parabéns!</p></div>
                <div class="alert alert-info"><p><strong>Atenção:</strong> você tem informações importantes para ler.</p></div>
                <div class="alert alert-warning"><p><strong>Cuidado:</strong> cheque duas vezes. Você pode ter esquecido alguma informação. <a href="#">Veja mais detalhes aqui</a> </p></div>
                <div class="alert alert-danger"><p><strong>Mórreu:</strong> Algo muito ruim aconteceu e você vai precisar refazer tudo.</p></div>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-selects">Select personalizado</h2>
            <div class="element-example">
                <form>
                    <select name="select-simples" class="ls-select">
                        <option value="MG">Minas Gerais</option>
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </form>
                <br>
                <form>
                    <select name="select-simples-grande" class="ls-select" style="width:300px">
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="am">Amazonas</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espirito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="ro">Rondônia</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="sp">São Paulo</option>
                        <option value="se">Sergipe</option>
                        <option value="to">Tocantins</option>
                    </select>
                </form>
                <br>
                <form>
                    <select multiple name="select-multiplo-placeholder" class="ls-select" style="width:300px" placeholder="Selecione um estado">
                        <option value="MG">Minas Gerais</option>
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </form>

            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-forms">Formulário</h2>
            <div class="element-example">
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <label for="ipt1">Campo simples</label>
                            <input type="email" class="form-control" id="ipt1" placeholder="Insira seu texto aqui">
                            <p class="help-block">Exemplo de texto de ajuda.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect">Seletor</label>
                            <select id="exampleSelect" class="form-control">
                                <option value="">Escolha uma opção</option>
                                <option value="">Isso mesmo :D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Campo de senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Campo para envio de arquivo</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-1">
                            <label for="checkbox-1">Marque aqui</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-2">
                            <label for="checkbox-2">Marque aqui</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-3">
                            <label for="checkbox-3">Marque aqui</label>
                        </div>
                        <div class="radio">
                            <input name="radios" type="radio" id="radio-button-1">
                            <label for="radio-button-1">Ou aqui</label>
                        </div>
                        <div class="radio">
                            <input name="radios" type="radio" id="radio-button-2">
                            <label for="radio-button-2">Ou aqui</label>
                        </div>
                        <div class="radio">
                            <input name="radios" type="radio" id="radio-button-3">
                            <label for="radio-button-3">Ou aqui</label>
                        </div>
                        <div class="box-actions">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-formshor">Formulários horizontais</h2>
            <div class="element-example">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox-x">
                                <label for="checkbox-x">Me manter conectado</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-forms-line">Formulários em linha</h2>
            <div class="element-example">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox-y">
                        <label for="checkbox-y">Me manter conectado</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-buttons">Botões</h2>
            <div class="element-example">
                <button type="button" class="btn btn-xs btn-default">Default</button>
                <button type="button" class="btn btn-xs btn-primary">Primary</button>
                <button type="button" class="btn btn-xs btn-success">Success</button>
                <button type="button" class="btn btn-xs btn-info">Info</button>
                <button type="button" class="btn btn-xs btn-warning">Warning</button>
                <button type="button" class="btn btn-xs btn-danger">Danger</button>
                <br>
                <br>
                <button type="button" class="btn btn-sm btn-default">Default</button>
                <button type="button" class="btn btn-sm btn-primary">Primary</button>
                <button type="button" class="btn btn-sm btn-success">Success</button>
                <button type="button" class="btn btn-sm btn-info">Info</button>
                <button type="button" class="btn btn-sm btn-warning">Warning</button>
                <button type="button" class="btn btn-sm btn-danger">Danger</button>
                <br>
                <br>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <br>
                <br>
                <button type="button" class="btn btn-lg btn-default">Default</button>
                <button type="button" class="btn btn-lg btn-primary">Primary</button>
                <button type="button" class="btn btn-lg btn-success">Success</button>
                <button type="button" class="btn btn-lg btn-info">Info</button>
                <button type="button" class="btn btn-lg btn-warning">Warning</button>
                <button type="button" class="btn btn-lg btn-danger">Danger</button>
            </div>


            <hr class="separator">

            <h2 class="title-2" id="example-label">Label ou Tags</h2>
            <div class="element-example">
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </div>

            <hr class="separator">

            <h2 class="title-2" id="example-icons">Ícones</h2>
            <div class="element-example">
                <span aria-hidden="true" class="ico-home"></span> &nbsp;ico-home
            </div>


            <span class="box1"><span aria-hidden="true" class="ico-accessibility" data-keyword=""></span>&nbsp;ico-accessibility</span>
            <span class="box1"><span aria-hidden="true" class="ico-address-book" data-keyword=""></span>&nbsp;ico-address-book</span>
            <span class="box1"><span aria-hidden="true" class="ico-airplane" data-keyword=""></span>&nbsp;ico-airplane</span>
            <span class="box1"><span aria-hidden="true" class="ico-android" data-keyword=""></span>&nbsp;ico-android</span>
            <span class="box1"><span aria-hidden="true" class="ico-apple" data-keyword=""></span>&nbsp;ico-apple</span>
            <span class="box1"><span aria-hidden="true" class="ico-arrow-down" data-keyword=""></span>&nbsp;ico-arrow-down</span>
            <span class="box1"><span aria-hidden="true" class="ico-arrow-left" data-keyword=""></span>&nbsp;ico-arrow-left</span>
            <span class="box1"><span aria-hidden="true" class="ico-arrow-right" data-keyword=""></span>&nbsp;ico-arrow-right</span>
            <span class="box1"><span aria-hidden="true" class="ico-arrow-up" data-keyword=""></span>&nbsp;ico-arrow-up</span>
            <span class="box1"><span aria-hidden="true" class="ico-attachment" data-keyword=""></span>&nbsp;ico-attachment</span>
            <span class="box1"><span aria-hidden="true" class="ico-angle-left" data-keyword=""></span>&nbsp;ico-angle-left</span>
            <span class="box1"><span aria-hidden="true" class="ico-angle-right" data-keyword=""></span>&nbsp;ico-angle-right</span>
            <span class="box1"><span aria-hidden="true" class="ico-angle-up" data-keyword=""></span>&nbsp;ico-angle-up</span>
            <span class="box1"><span aria-hidden="true" class="ico-angle-down" data-keyword=""></span>&nbsp;ico-angle-down</span>
            <span class="box1"><span aria-hidden="true" class="ico-backward" data-keyword=""></span>&nbsp;ico-backward</span>
            <span class="box1"><span aria-hidden="true" class="ico-bars" data-keyword=""></span>&nbsp;ico-bars</span>
            <span class="box1"><span aria-hidden="true" class="ico-blocked" data-keyword=""></span>&nbsp;ico-blocked</span>
            <span class="box1"><span aria-hidden="true" class="ico-blogger" data-keyword=""></span>&nbsp;ico-blogger</span>
            <span class="box1"><span aria-hidden="true" class="ico-blogger-2" data-keyword=""></span>&nbsp;ico-blogger-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-book" data-keyword=""></span>&nbsp;ico-book</span>
            <span class="box1"><span aria-hidden="true" class="ico-bookmark" data-keyword=""></span>&nbsp;ico-bookmark</span>
            <span class="box1"><span aria-hidden="true" class="ico-box-add" data-keyword=""></span>&nbsp;ico-box-add</span>
            <span class="box1"><span aria-hidden="true" class="ico-box-remove" data-keyword=""></span>&nbsp;ico-box-remove</span>
            <span class="box1"><span aria-hidden="true" class="ico-brightness-contrast" data-keyword=""></span>&nbsp;ico-brightness-contrast</span>
            <span class="box1"><span aria-hidden="true" class="ico-brightness-medium" data-keyword=""></span>&nbsp;ico-brightness-medium</span>
            <span class="box1"><span aria-hidden="true" class="ico-bubble" data-keyword=""></span>&nbsp;ico-bubble</span>
            <span class="box1"><span aria-hidden="true" class="ico-bubbles" data-keyword=""></span>&nbsp;ico-bubbles</span>
            <span class="box1"><span aria-hidden="true" class="ico-bubbles-2" data-keyword=""></span>&nbsp;ico-bubbles-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-calendar" data-keyword=""></span>&nbsp;ico-calendar</span>
            <span class="box1"><span aria-hidden="true" class="ico-calendar-check" data-keyword=""></span>&nbsp;ico-calendar-check</span>
            <span class="box1"><span aria-hidden="true" class="ico-calendar-more" data-keyword=""></span>&nbsp;ico-calendar-more</span>
            <span class="box1"><span aria-hidden="true" class="ico-camera" data-keyword=""></span>&nbsp;ico-camera</span>
            <span class="box1"><span aria-hidden="true" class="ico-cancel-circle" data-keyword=""></span>&nbsp;ico-cancel-circle</span>
            <span class="box1"><span aria-hidden="true" class="ico-cart" data-keyword=""></span>&nbsp;ico-cart</span>
            <span class="box1"><span aria-hidden="true" class="ico-cart-2" data-keyword=""></span>&nbsp;ico-cart-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-chart-bar-up" data-keyword=""></span>&nbsp;ico-chart-bar-up</span>
            <span class="box1"><span aria-hidden="true" class="ico-checkbox-checked" data-keyword=""></span>&nbsp;ico-checkbox-checked</span>
            <span class="box1"><span aria-hidden="true" class="ico-checkbox-partial" data-keyword=""></span>&nbsp;ico-checkbox-partial</span>
            <span class="box1"><span aria-hidden="true" class="ico-checkbox-unchecked" data-keyword=""></span>&nbsp;ico-checkbox-unchecked</span>
            <span class="box1"><span aria-hidden="true" class="ico-checkmark" data-keyword=""></span>&nbsp;ico-checkmark</span>
            <span class="box1"><span aria-hidden="true" class="ico-checkmark-circle" data-keyword=""></span>&nbsp;ico-checkmark-circle</span>
            <span class="box1"><span aria-hidden="true" class="ico-chrome" data-keyword=""></span>&nbsp;ico-chrome</span>
            <span class="box1"><span aria-hidden="true" class="ico-clock" data-keyword=""></span>&nbsp;ico-clock</span>
            <span class="box1"><span aria-hidden="true" class="ico-close" data-keyword=""></span>&nbsp;ico-close</span>
            <span class="box1"><span aria-hidden="true" class="ico-cloud" data-keyword=""></span>&nbsp;ico-cloud</span>
            <span class="box1"><span aria-hidden="true" class="ico-cloud-download" data-keyword=""></span>&nbsp;ico-cloud-download</span>
            <span class="box1"><span aria-hidden="true" class="ico-cloud-upload" data-keyword=""></span>&nbsp;ico-cloud-upload</span>
            <span class="box1"><span aria-hidden="true" class="ico-code" data-keyword=""></span>&nbsp;ico-code</span>
            <span class="box1"><span aria-hidden="true" class="ico-cog" data-keyword=""></span>&nbsp;ico-cog</span>
            <span class="box1"><span aria-hidden="true" class="ico-cogs" data-keyword=""></span>&nbsp;ico-cogs</span>
            <span class="box1"><span aria-hidden="true" class="ico-contract" data-keyword=""></span>&nbsp;ico-contract</span>
            <span class="box1"><span aria-hidden="true" class="ico-contract-2" data-keyword=""></span>&nbsp;ico-contract-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-contrast" data-keyword=""></span>&nbsp;ico-contrast</span>
            <span class="box1"><span aria-hidden="true" class="ico-css3" data-keyword=""></span>&nbsp;ico-css3</span>
            <span class="box1"><span aria-hidden="true" class="ico-delicious" data-keyword=""></span>&nbsp;ico-delicious</span>
            <span class="box1"><span aria-hidden="true" class="ico-deviantart" data-keyword=""></span>&nbsp;ico-deviantart</span>
            <span class="box1"><span aria-hidden="true" class="ico-direction-up" data-keyword=""></span>&nbsp;ico-direction-up</span>
            <span class="box1"><span aria-hidden="true" class="ico-direction-down" data-keyword=""></span>&nbsp;ico-direction-down</span>
            <span class="box1"><span aria-hidden="true" class="ico-direction-right" data-keyword=""></span>&nbsp;ico-direction-right</span>
            <span class="box1"><span aria-hidden="true" class="ico-direction-left" data-keyword=""></span>&nbsp;ico-direction-left</span>
            <span class="box1"><span aria-hidden="true" class="ico-deviantart-2" data-keyword=""></span>&nbsp;ico-deviantart-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-download" data-keyword=""></span>&nbsp;ico-download</span>
            <span class="box1"><span aria-hidden="true" class="ico-download-2" data-keyword=""></span>&nbsp;ico-download-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-download-3" data-keyword=""></span>&nbsp;ico-download-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-drawer" data-keyword=""></span>&nbsp;ico-drawer</span>
            <span class="box1"><span aria-hidden="true" class="ico-drawer-2" data-keyword=""></span>&nbsp;ico-drawer-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-drawer-3" data-keyword=""></span>&nbsp;ico-drawer-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-dribbble" data-keyword=""></span>&nbsp;ico-dribbble</span>
            <span class="box1"><span aria-hidden="true" class="ico-dribbble-2" data-keyword=""></span>&nbsp;ico-dribbble-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-dribbble-3" data-keyword=""></span>&nbsp;ico-dribbble-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-earth" data-keyword=""></span>&nbsp;ico-earth</span>
            <span class="box1"><span aria-hidden="true" class="ico-eject" data-keyword=""></span>&nbsp;ico-eject</span>
            <span class="box1"><span aria-hidden="true" class="ico-enter" data-keyword=""></span>&nbsp;ico-enter</span>
            <span class="box1"><span aria-hidden="true" class="ico-envelop" data-keyword=""></span>&nbsp;ico-envelop</span>
            <span class="box1"><span aria-hidden="true" class="ico-exit" data-keyword=""></span>&nbsp;ico-exit</span>
            <span class="box1"><span aria-hidden="true" class="ico-expand" data-keyword=""></span>&nbsp;ico-expand</span>
            <span class="box1"><span aria-hidden="true" class="ico-expand-2" data-keyword=""></span>&nbsp;ico-expand-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-export" data-keyword=""></span>&nbsp;ico-export</span>
            <span class="box1"><span aria-hidden="true" class="ico-eye" data-keyword=""></span>&nbsp;ico-eye</span>
            <span class="box1"><span aria-hidden="true" class="ico-eye-blocked" data-keyword=""></span>&nbsp;ico-eye-blocked</span>
            <span class="box1"><span aria-hidden="true" class="ico-facebook" data-keyword=""></span>&nbsp;ico-facebook</span>
            <span class="box1"><span aria-hidden="true" class="ico-facebook-2" data-keyword=""></span>&nbsp;ico-facebook-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-facebook-3" data-keyword=""></span>&nbsp;ico-facebook-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-feed" data-keyword=""></span>&nbsp;ico-feed</span>
            <span class="box1"><span aria-hidden="true" class="ico-feed-2" data-keyword=""></span>&nbsp;ico-feed-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-feed-3" data-keyword=""></span>&nbsp;ico-feed-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-feed-4" data-keyword=""></span>&nbsp;ico-feed-4</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-css" data-keyword=""></span>&nbsp;ico-file-css</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-excel" data-keyword=""></span>&nbsp;ico-file-excel</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-openoffice" data-keyword=""></span>&nbsp;ico-file-openoffice</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-pdf" data-keyword=""></span>&nbsp;ico-file-pdf</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-powerpoint" data-keyword=""></span>&nbsp;ico-file-powerpoint</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-word" data-keyword=""></span>&nbsp;ico-file-word</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-xml" data-keyword=""></span>&nbsp;ico-file-xml</span>
            <span class="box1"><span aria-hidden="true" class="ico-file-zip" data-keyword=""></span>&nbsp;ico-file-zip</span>
            <span class="box1"><span aria-hidden="true" class="ico-finder" data-keyword=""></span>&nbsp;ico-finder</span>
            <span class="box1"><span aria-hidden="true" class="ico-firefox" data-keyword=""></span>&nbsp;ico-firefox</span>
            <span class="box1"><span aria-hidden="true" class="ico-first" data-keyword=""></span>&nbsp;ico-first</span>
            <span class="box1"><span aria-hidden="true" class="ico-flag" data-keyword=""></span>&nbsp;ico-flag</span>
            <span class="box1"><span aria-hidden="true" class="ico-flattr" data-keyword=""></span>&nbsp;ico-flattr</span>
            <span class="box1"><span aria-hidden="true" class="ico-flickr" data-keyword=""></span>&nbsp;ico-flickr</span>
            <span class="box1"><span aria-hidden="true" class="ico-flickr-2" data-keyword=""></span>&nbsp;ico-flickr-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-flickr-3" data-keyword=""></span>&nbsp;ico-flickr-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-flickr-4" data-keyword=""></span>&nbsp;ico-flickr-4</span>
            <span class="box1"><span aria-hidden="true" class="ico-folder" data-keyword=""></span>&nbsp;ico-folder</span>
            <span class="box1"><span aria-hidden="true" class="ico-folder-open" data-keyword=""></span>&nbsp;ico-folder-open</span>
            <span class="box1"><span aria-hidden="true" class="ico-forrst" data-keyword=""></span>&nbsp;ico-forrst</span>
            <span class="box1"><span aria-hidden="true" class="ico-forrst-2" data-keyword=""></span>&nbsp;ico-forrst-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-forward" data-keyword=""></span>&nbsp;ico-forward</span>
            <span class="box1"><span aria-hidden="true" class="ico-forward-2" data-keyword=""></span>&nbsp;ico-forward-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-foursquare" data-keyword=""></span>&nbsp;ico-foursquare</span>
            <span class="box1"><span aria-hidden="true" class="ico-foursquare-2" data-keyword=""></span>&nbsp;ico-foursquare-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-github" data-keyword=""></span>&nbsp;ico-github</span>
            <span class="box1"><span aria-hidden="true" class="ico-github-2" data-keyword=""></span>&nbsp;ico-github-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-github-3" data-keyword=""></span>&nbsp;ico-github-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-github-4" data-keyword=""></span>&nbsp;ico-github-4</span>
            <span class="box1"><span aria-hidden="true" class="ico-github-5" data-keyword=""></span>&nbsp;ico-github-5</span>
            <span class="box1"><span aria-hidden="true" class="ico-globe" data-keyword=""></span>&nbsp;ico-globe</span>
            <span class="box1"><span aria-hidden="true" class="ico-google" data-keyword=""></span>&nbsp;ico-google</span>
            <span class="box1"><span aria-hidden="true" class="ico-google-drive" data-keyword=""></span>&nbsp;ico-google-drive</span>
            <span class="box1"><span aria-hidden="true" class="ico-google-plus" data-keyword=""></span>&nbsp;ico-google-plus</span>
            <span class="box1"><span aria-hidden="true" class="ico-google-plus-2" data-keyword=""></span>&nbsp;ico-google-plus-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-google-plus-3" data-keyword=""></span>&nbsp;ico-google-plus-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-google-plus-4" data-keyword=""></span>&nbsp;ico-google-plus-4</span>
            <span class="box1"><span aria-hidden="true" class="ico-grid" data-keyword=""></span>&nbsp;ico-grid</span>
            <span class="box1"><span aria-hidden="true" class="ico-history" data-keyword=""></span>&nbsp;ico-history</span>
            <span class="box1"><span aria-hidden="true" class="ico-home" data-keyword=""></span>&nbsp;ico-home</span>
            <span class="box1"><span aria-hidden="true" class="ico-html5" data-keyword=""></span>&nbsp;ico-html5</span>
            <span class="box1"><span aria-hidden="true" class="ico-html5-2" data-keyword=""></span>&nbsp;ico-html5-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-IcoMoon" data-keyword=""></span>&nbsp;ico-IcoMoon</span>
            <span class="box1"><span aria-hidden="true" class="ico-IE" data-keyword=""></span>&nbsp;ico-IE</span>
            <span class="box1"><span aria-hidden="true" class="ico-image" data-keyword=""></span>&nbsp;ico-image</span>
            <span class="box1"><span aria-hidden="true" class="ico-images" data-keyword=""></span>&nbsp;ico-images</span>
            <span class="box1"><span aria-hidden="true" class="ico-info" data-keyword=""></span>&nbsp;ico-info</span>
            <span class="box1"><span aria-hidden="true" class="ico-insert-template" data-keyword=""></span>&nbsp;ico-insert-template</span>
            <span class="box1"><span aria-hidden="true" class="ico-instagram" data-keyword=""></span>&nbsp;ico-instagram</span>
            <span class="box1"><span aria-hidden="true" class="ico-joomla" data-keyword=""></span>&nbsp;ico-joomla</span>
            <span class="box1"><span aria-hidden="true" class="ico-key" data-keyword=""></span>&nbsp;ico-key</span>
            <span class="box1"><span aria-hidden="true" class="ico-lamp" data-keyword=""></span>&nbsp;ico-lamp</span>
            <span class="box1"><span aria-hidden="true" class="ico-lanyrd" data-keyword=""></span>&nbsp;ico-lanyrd</span>
            <span class="box1"><span aria-hidden="true" class="ico-last" data-keyword=""></span>&nbsp;ico-last</span>
            <span class="box1"><span aria-hidden="true" class="ico-lastfm" data-keyword=""></span>&nbsp;ico-lastfm</span>
            <span class="box1"><span aria-hidden="true" class="ico-lastfm-2" data-keyword=""></span>&nbsp;ico-lastfm-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-libreoffice" data-keyword=""></span>&nbsp;ico-libreoffice</span>
            <span class="box1"><span aria-hidden="true" class="ico-link" data-keyword=""></span>&nbsp;ico-link</span>
            <span class="box1"><span aria-hidden="true" class="ico-linkedin" data-keyword=""></span>&nbsp;ico-linkedin</span>
            <span class="box1"><span aria-hidden="true" class="ico-list" data-keyword=""></span>&nbsp;ico-list</span>
            <span class="box1"><span aria-hidden="true" class="ico-location" data-keyword=""></span>&nbsp;ico-location</span>
            <span class="box1"><span aria-hidden="true" class="ico-loop" data-keyword=""></span>&nbsp;ico-loop</span>
            <span class="box1"><span aria-hidden="true" class="ico-loop-2" data-keyword=""></span>&nbsp;ico-loop-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-loop-3" data-keyword=""></span>&nbsp;ico-loop-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-menu" data-keyword=""></span>&nbsp;ico-menu</span>
            <span class="box1"><span aria-hidden="true" class="ico-menu-2" data-keyword=""></span>&nbsp;ico-menu-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-minus" data-keyword=""></span>&nbsp;ico-minus</span>
            <span class="box1"><span aria-hidden="true" class="ico-mobile" data-keyword=""></span>&nbsp;ico-mobile</span>
            <span class="box1"><span aria-hidden="true" class="ico-monitor" data-keyword=""></span>&nbsp;ico-monitor</span>
            <span class="box1"><span aria-hidden="true" class="ico-music" data-keyword=""></span>&nbsp;ico-music</span>
            <span class="box1"><span aria-hidden="true" class="ico-next" data-keyword=""></span>&nbsp;ico-next</span>
            <span class="box1"><span aria-hidden="true" class="ico-numbered-list" data-keyword=""></span>&nbsp;ico-numbered-list</span>
            <span class="box1"><span aria-hidden="true" class="ico-opera" data-keyword=""></span>&nbsp;ico-opera</span>
            <span class="box1"><span aria-hidden="true" class="ico-pause" data-keyword=""></span>&nbsp;ico-pause</span>
            <span class="box1"><span aria-hidden="true" class="ico-paypal" data-keyword=""></span>&nbsp;ico-paypal</span>
            <span class="box1"><span aria-hidden="true" class="ico-paypal-2" data-keyword=""></span>&nbsp;ico-paypal-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-paypal-3" data-keyword=""></span>&nbsp;ico-paypal-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-pencil" data-keyword=""></span>&nbsp;ico-pencil</span>
            <span class="box1"><span aria-hidden="true" class="ico-phone" data-keyword=""></span>&nbsp;ico-phone</span>
            <span class="box1"><span aria-hidden="true" class="ico-picassa" data-keyword=""></span>&nbsp;ico-picassa</span>
            <span class="box1"><span aria-hidden="true" class="ico-picassa-2" data-keyword=""></span>&nbsp;ico-picassa-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-pinterest" data-keyword=""></span>&nbsp;ico-pinterest</span>
            <span class="box1"><span aria-hidden="true" class="ico-pinterest-2" data-keyword=""></span>&nbsp;ico-pinterest-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-play" data-keyword=""></span>&nbsp;ico-play</span>
            <span class="box1"><span aria-hidden="true" class="ico-play-2" data-keyword=""></span>&nbsp;ico-play-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-play-3" data-keyword=""></span>&nbsp;ico-play-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-plus" data-keyword=""></span>&nbsp;ico-plus</span>
            <span class="box1"><span aria-hidden="true" class="ico-podcast" data-keyword=""></span>&nbsp;ico-podcast</span>
            <span class="box1"><span aria-hidden="true" class="ico-previous" data-keyword=""></span>&nbsp;ico-previous</span>
            <span class="box1"><span aria-hidden="true" class="ico-question" data-keyword=""></span>&nbsp;ico-question</span>
            <span class="box1"><span aria-hidden="true" class="ico-radio-checked" data-keyword=""></span>&nbsp;ico-radio-checked</span>
            <span class="box1"><span aria-hidden="true" class="ico-radio-unchecked" data-keyword=""></span>&nbsp;ico-radio-unchecked</span>
            <span class="box1"><span aria-hidden="true" class="ico-reddit" data-keyword=""></span>&nbsp;ico-reddit</span>
            <span class="box1"><span aria-hidden="true" class="ico-redo" data-keyword=""></span>&nbsp;ico-redo</span>
            <span class="box1"><span aria-hidden="true" class="ico-redo-2" data-keyword=""></span>&nbsp;ico-redo-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-remove" data-keyword=""></span>&nbsp;ico-remove</span>
            <span class="box1"><span aria-hidden="true" class="ico-reply" data-keyword=""></span>&nbsp;ico-reply</span>
            <span class="box1"><span aria-hidden="true" class="ico-safari" data-keyword=""></span>&nbsp;ico-safari</span>
            <span class="box1"><span aria-hidden="true" class="ico-screen" data-keyword=""></span>&nbsp;ico-screen</span>
            <span class="box1"><span aria-hidden="true" class="ico-search" data-keyword=""></span>&nbsp;ico-search</span>
            <span class="box1"><span aria-hidden="true" class="ico-shuffle" data-keyword=""></span>&nbsp;ico-shuffle</span>
            <span class="box1"><span aria-hidden="true" class="ico-skype" data-keyword=""></span>&nbsp;ico-skype</span>
            <span class="box1"><span aria-hidden="true" class="ico-soundcloud" data-keyword=""></span>&nbsp;ico-soundcloud</span>
            <span class="box1"><span aria-hidden="true" class="ico-soundcloud-2" data-keyword=""></span>&nbsp;ico-soundcloud-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-spam" data-keyword=""></span>&nbsp;ico-spam</span>
            <span class="box1"><span aria-hidden="true" class="ico-spinner" data-keyword=""></span>&nbsp;ico-spinner</span>
            <span class="box1"><span aria-hidden="true" class="ico-stackoverflow" data-keyword=""></span>&nbsp;ico-stackoverflow</span>
            <span class="box1"><span aria-hidden="true" class="ico-star" data-keyword=""></span>&nbsp;ico-star</span>
            <span class="box1"><span aria-hidden="true" class="ico-star-2" data-keyword=""></span>&nbsp;ico-star-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-star-3" data-keyword=""></span>&nbsp;ico-star-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-stats" data-keyword=""></span>&nbsp;ico-stats</span>
            <span class="box1"><span aria-hidden="true" class="ico-steam" data-keyword=""></span>&nbsp;ico-steam</span>
            <span class="box1"><span aria-hidden="true" class="ico-steam-2" data-keyword=""></span>&nbsp;ico-steam-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-stop" data-keyword=""></span>&nbsp;ico-stop</span>
            <span class="box1"><span aria-hidden="true" class="ico-stumbleupon" data-keyword=""></span>&nbsp;ico-stumbleupon</span>
            <span class="box1"><span aria-hidden="true" class="ico-stumbleupon-2" data-keyword=""></span>&nbsp;ico-stumbleupon-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-switch" data-keyword=""></span>&nbsp;ico-switch</span>
            <span class="box1"><span aria-hidden="true" class="ico-tab" data-keyword=""></span>&nbsp;ico-tab</span>
            <span class="box1"><span aria-hidden="true" class="ico-table" data-keyword=""></span>&nbsp;ico-table</span>
            <span class="box1"><span aria-hidden="true" class="ico-table-alt" data-keyword=""></span>&nbsp;ico-table-alt</span>
            <span class="box1"><span aria-hidden="true" class="ico-tablet" data-keyword=""></span>&nbsp;ico-tablet</span>
            <span class="box1"><span aria-hidden="true" class="ico-tag" data-keyword=""></span>&nbsp;ico-tag</span>
            <span class="box1"><span aria-hidden="true" class="ico-thumbs-up" data-keyword=""></span>&nbsp;ico-thumbs-up</span>
            <span class="box1"><span aria-hidden="true" class="ico-thumbs-up-2" data-keyword=""></span>&nbsp;ico-thumbs-up-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-tree" data-keyword=""></span>&nbsp;ico-tree</span>
            <span class="box1"><span aria-hidden="true" class="ico-truck" data-keyword=""></span>&nbsp;ico-truck</span>
            <span class="box1"><span aria-hidden="true" class="ico-tumblr" data-keyword=""></span>&nbsp;ico-tumblr</span>
            <span class="box1"><span aria-hidden="true" class="ico-tumblr-2" data-keyword=""></span>&nbsp;ico-tumblr-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-tux" data-keyword=""></span>&nbsp;ico-tux</span>
            <span class="box1"><span aria-hidden="true" class="ico-twitter" data-keyword=""></span>&nbsp;ico-twitter</span>
            <span class="box1"><span aria-hidden="true" class="ico-twitter-2" data-keyword=""></span>&nbsp;ico-twitter-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-twitter-3" data-keyword=""></span>&nbsp;ico-twitter-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-undo" data-keyword=""></span>&nbsp;ico-undo</span>
            <span class="box1"><span aria-hidden="true" class="ico-undo-2" data-keyword=""></span>&nbsp;ico-undo-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-upload" data-keyword=""></span>&nbsp;ico-upload</span>
            <span class="box1"><span aria-hidden="true" class="ico-upload-2" data-keyword=""></span>&nbsp;ico-upload-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-upload-3" data-keyword=""></span>&nbsp;ico-upload-3</span>
            <span class="box1"><span aria-hidden="true" class="ico-user" data-keyword=""></span>&nbsp;ico-user</span>
            <span class="box1"><span aria-hidden="true" class="ico-users" data-keyword=""></span>&nbsp;ico-users</span>
            <span class="box1"><span aria-hidden="true" class="ico-vimeo" data-keyword=""></span>&nbsp;ico-vimeo</span>
            <span class="box1"><span aria-hidden="true" class="ico-vimeo-2" data-keyword=""></span>&nbsp;ico-vimeo-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-vimeo2" data-keyword=""></span>&nbsp;ico-vimeo2</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-decrease" data-keyword=""></span>&nbsp;ico-volume-decrease</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-high" data-keyword=""></span>&nbsp;ico-volume-high</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-increase" data-keyword=""></span>&nbsp;ico-volume-increase</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-low" data-keyword=""></span>&nbsp;ico-volume-low</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-medium" data-keyword=""></span>&nbsp;ico-volume-medium</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-mute" data-keyword=""></span>&nbsp;ico-volume-mute</span>
            <span class="box1"><span aria-hidden="true" class="ico-volume-mute-2" data-keyword=""></span>&nbsp;ico-volume-mute-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-windows" data-keyword=""></span>&nbsp;ico-windows</span>
            <span class="box1"><span aria-hidden="true" class="ico-windows8" data-keyword=""></span>&nbsp;ico-windows8</span>
            <span class="box1"><span aria-hidden="true" class="ico-wordpress" data-keyword=""></span>&nbsp;ico-wordpress</span>
            <span class="box1"><span aria-hidden="true" class="ico-wordpress-2" data-keyword=""></span>&nbsp;ico-wordpress-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-xing" data-keyword=""></span>&nbsp;ico-xing</span>
            <span class="box1"><span aria-hidden="true" class="ico-xing-2" data-keyword=""></span>&nbsp;ico-xing-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-yahoo" data-keyword=""></span>&nbsp;ico-yahoo</span>
            <span class="box1"><span aria-hidden="true" class="ico-yelp" data-keyword=""></span>&nbsp;ico-yelp</span>
            <span class="box1"><span aria-hidden="true" class="ico-youtube" data-keyword=""></span>&nbsp;ico-youtube</span>
            <span class="box1"><span aria-hidden="true" class="ico-youtube-2" data-keyword=""></span>&nbsp;ico-youtube-2</span>
            <span class="box1"><span aria-hidden="true" class="ico-zoom-in" data-keyword=""></span>&nbsp;ico-zoom-in</span>
            <span class="box1"><span aria-hidden="true" class="ico-zoom-out" data-keyword=""></span>&nbsp;ico-zoom-out</span>


            <hr class="separator">

        </div>
    </div>
    </div>
</main>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/google-code-prettify/src/prettify.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/manual.js" type="text/javascript"></script>
</body>
</html>
