
{{--<div>--}}


{{--<ul>--}}



{{--<li><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></li>--}}




{{--</ul>--}}

{{--</div>--}}
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel_cms";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * from users";
$con1=$conn->query($query);


?>





        <!doctype html>
<html lang="pt-br">
<head>
    <title>Busca em Tabela</title>
    <meta charset="utf 8">

    <style>

        div.title{
            text-align: center;
        }
        /*table{*/
        /*border-collapse: collapse;*/
        /*text-align: center;*/
        /*}*/

        /*table, td, th{*/
        /*border: 1.4px solid rgb(0101, 25, 25);*/
        /*padding: 10px;*/
        /*background-color: #fff;*/
        /*margin: auto;*/
        /*}*/


        /*body{*/
        /*font-family:sans-serif;*/
        /*}*/

        *{
            margin: 10px;
            padding: -5px;
        }
        /**{*/
        /*margin: auto;*/
        /*padding: 0;*/
        /*}*/


        #minhaTabela{
            width:100%;
            margin:0 auto;
            border:0;
            box-shadow: 0 5px 30px darkgrey;
            border-spacing: 0;

        }

        #minhaTabela thead th{
            font-weight: bold;
            background-color: black;
            color:white;

            padding:5px 10px;

        }

        #minhaTabela tr td{
            padding:10px 5px;
            text-align: center;


            cursor: pointer; /**importante para não mostrar cursor de texto**/
        }

        #minhaTabela tr td:last-child{

            text-align: center;

        }

        /**Cores**/
        #minhaTabela tr:nth-child(odd){
            background-color: #eee;
        }

        /**Cor quando passar por cima**/
        #minhaTabela tr:hover td{
            background-color: #feffb7;
        }

        /**Cor quando selecionado**/
        #minhaTabela tr.selecionado td{
            background-color: #aff7ff;
        }


        /*button#visualizarDados{*/
        /*background-color: white;*/
        /*border: 1px solid black;*/
        /*width:30%;*/
        /*margin: 10px auto;*/
        /*padding:10px 0;*/
        /*display: block;*/
        /*color: black;*/
        /*}*/

        .maxWidth{
            max-width: 800px;
            width:100%;

        }
        .input{
            width: 100%;
            height: 30px;
            padding-left: 5px;
            box-sizing: border-box;
            margin: 10px auto;

        }
    </style>

</head>

<body>

{{--<div class="title">--}}
{{--<h1> Consultar Cadastros </h1>--}}
{{--<hr>--}}
{{--</div>--}}






<div class="container">

    <div id="dvTabela" class="table-responsive">

        <input type="text" id='minhaBusca' placeholder="Buscar..." class="  input"/>

        <table id='minhaTabela'>
            <thead>

            <!--LINK REGISTRO NEW USER

            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>-->




            <tr>
                <th>Nome</th>
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

            <tbody id="tbody">
            <?php while($dados=$con1->fetch_array() ){?>

            <tr>
                <td> <?php echo $dados ["name"];?> </td>
                <td> <?php echo $dados ["role"];?> </td>
                <td><?php echo $dados ["email"];?> </td>
                <td><?php echo $dados ["cpf"];?> </td>
                <td><?php echo $dados ["cell_phone"];?></td>
                <td><?php echo $dados ["telephone"];?></td>
                <td><?php echo $dados ["address"];?></td>
                <td><?php echo $dados ["number"];?></td>
                <td><?php echo $dados ["neighborhood"];?></td>
                <td><?php echo $dados ["zip_code"];?></td>
            </tr>

            {{--<tr>--}}
            {{--<td>Gunnar Correa</td>--}}
            {{--<td>gunnarcorrea@gmail.com</td>--}}
            {{--<td>18-195868545</td>--}}
            {{--<td>Ativo</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>Maria</td>--}}
            {{--<td>maria@gmail.com</td>--}}
            {{--<td>19-195868545</td>--}}
            {{--<td>Ativo</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>Jose</td>--}}
            {{--<td>jose@gmail.com</td>--}}
            {{--<td>18-195868545</td>--}}
            {{--<td>Desativado</td>--}}
            {{--</tr>--}}



            </tbody>


        </table>



        {{--<script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}

        <script>


            /**
             Exemplo de como capturar os dados
             **/
                // var btnVisualizar = document.getElementById("visualizarDados");
                //
                // btnVisualizar.addEventListener("click", function(){
                //     var selecionados = tabela.getElementsByClassName("selecionado");
                //     //Verificar se eestá selecionado
                //     if(selecionados.length < 1){
                //         alert("Selecione pelo menos uma linha");
                //         return false;
                //     }
                //
                //     var dados = "";
                //
                //     for(var i = 0; i < selecionados.length; i++){
                //         var selecionado = selecionados[i];
                //         selecionado = selecionado.getElementsByTagName("td");
                //         dados += "ID: " + selecionado[0].innerHTML + " - Nome: " + selecionado[1].innerHTML + " - Idade: " + selecionado[2].innerHTML + "\n";
                //     }
                //
                //     alert(dados);
                // });

                // var tbody = document.getElementById("minhaTabela");
                // for (var i=0; i< dados.length; i++){
                //     var tr ="<tr>"+
                //             "<td>" + dados[i][0] + "</td>" +
                //             "<td>" + dados[i][1] + "</td>" +
                //             "<td>" + dados[i][2] + "</td>" +
                //             "<td>" + dados[i][3] + "</td>" +
                //             "<td>" + dados[i][4] + "</td>" +
                //             "<td>" + dados[i][5] + "</td>" +
                //             "<td>" + dados[i][6] + "</td>" +
                //             "<td>" + dados[i][7] + "</td>" +
                //             "<td>" + dados[i][8] + "</td>" +
                //             "<td>" + dados[i][9] + "</td>" +
                //             "</tr>";
                //     tbody.innerHTML += tr;
                //
                //     var tr = tbody.childNodes;
                // }

                // var tr = tbody.childNodes;
                // console.log(tr);
                //var tbody = document.getElementById("tbody");


            var tbody = document.getElementById("tbody");

            // for (var i =0; i<10;i++){
            //     var tr =
            // }

            // var tr = $(this).parents('tr');
            // tbody.innerHTML = tr;
            var tr = tbody.childNodes;
            //console.log(tr);




            document.getElementById("minhaBusca").addEventListener("keyup", function () {
                var busca = document.getElementById("minhaBusca").value.toLowerCase();
                // console.log(busca);

                for(var i = 0; i < tbody.childNodes.length; i++){
                    var achou = false;

                    var tr = tbody.childNodes[i];
                    //console.log(tbody.childNodes[i]);

                    var td = tr.childNodes;
                    console.log(td);


                    for (var j = 0; j < td.length; j++){
                        //console.log(j);
                        var value = td[j].childNodes[0].nodeName.toLowerCase();
                        //console.log(td[j]);
                        if(value.indexOf(busca) >= 0){
                            //console.log(value.indexOf(busca));
                            achou = true;
                        }
                    }

                    // if(achou){
                    //     tr.style.display = "table-row";
                    // }else{
                    //     tr.style.display = "none";
                    // }
                }

            })


            var tabela = document.getElementById("minhaTabela");
            var linhas = tabela.getElementsByTagName("tr");

            for(var i = 0; i < linhas.length; i++){
                var linha = linhas[i];

                linha.addEventListener("click", function(){
                    //Adicionar ao atual
                    selLinha(this, false); //Selecione apenas um
                    //selLinha(this, true); //Selecione quantos quiser
                });
            }

            /**
             Caso passe true, você pode selecionar multiplas linhas.
             Caso passe false, você só pode selecionar uma linha por vez.
             **/
            function selLinha(linha, multiplos){
                if(!multiplos){
                    var linhas = linha.parentElement.getElementsByTagName("tr");
                    for(var i = 0; i < linhas.length; i++){
                        var linha_ = linhas[i];
                        linha_.classList.remove("selecionado");
                    }
                }
                linha.classList.toggle("selecionado");
            }


        </script>

    </div>

</div>
</div>

</body>

<div>
    <h2 class="title-2" id="example-icons">Unidade Centro</h2>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class1_centro" target="_blank">SALA 1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class2_centro" target="_blank">SALA 2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class3_centro" target="_blank">SALA 3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class4_centro" target="_blank">SALA 4</a></span>
</div>
<br>
<br>


<div>
    <h2 class="title-2" id="example-icons">Unidade Morumbi</h2>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class1_morumbi" target="_blank">SALA 1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class2_morumbi" target="_blank">SALA 2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class3_morumbi" target="_blank">SALA 3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class4_morumbi" target="_blank">SALA 4</a></span>
</div>
<br>
<br>

<div>
    <h2 class="title-2" id="example-icons">Unidade Pub</h2>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class1_pub" target="_blank">SALA 1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span> <a href="/admin_access_reserves_class2_pub" target="_blank">SALA 2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class3_pub" target="_blank">SALA 3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span ><span aria-hidden="true" class="ico-calendar" ></span>&nbsp; <a href="/admin_access_reserves_class4_pub" target="_blank">SALA 4</a></span>
</div>




<div class="form-group col-lg-3">
    <label for="name02">UNIDADE</label>
    <select name="rsv_unit_name" class="form-control">
        <option value="---">---</option>
        <option value="MORUMBI">MORUMBI</option>
        <option value="CENTRO">CENTRO</option>
        <option value="PUB">PUB</option>
    </select>
</div>

<div class="form-group col-lg-3">
    <label for="name02">SALA</label>
    <select  name="rsv_class" class="form-control">
        <option value="---">---</option>
        <option value="SALA 1">SALA 1</option>
        <option value="SALA 2">SALA 2</option>
        <option value="SALA 3">SALA 3</option>
    </select>
</div>


<div class="form-group col-lg-3">
    <label for="name02">DIA DA SEMANA</label>
    <select  name="rsv_week_day" class="form-control">
        <option value="---">---</option>
        <option value="SEGUNDA-FEIRA">SEGUNDA-FEIRA</option>
        <option value="TERÇA-FEIRA">TERÇA-FEIRA</option>
        <option value="QUARTA-FEIRA">QUARTA-FEIRA</option>
        <option value="QUINTA-FEIRA">QUINTA-FEIRA</option>
        <option value="SEXTA-FEIRA">SEXTA-FEIRA</option>
        <option value="SÁBADO">SÁBADO</option>
        <option value="DOMINGO">DOMINGO</option>
    </select>
</div>



<div class="tab-pane" id="general">

    <div class="row">

        <div class="form-group col-lg-3">
            <label for="name02" >Unidade</label>
            <input id="rsv_unit_name" type="text"  placeholder="Insira o nome" class="form-control{{ $errors->has('rsv_unit_name') ? ' is-invalid' : '' }}" name="rsv_unit_name" value="{{ old('rsv_unit_name') }}" required autofocus>

            @if ($errors->has('rsv_unit_name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_unit_name') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group col-lg-3">
            <label for="name02" >Sala</label>
            <input id="rsv_class_name" type="text"  placeholder="Insira o nome" class="form-control{{ $errors->has('rsv_class_name') ? ' is-invalid' : '' }}" name="rsv_unit_name" value="{{ old('rsv_class_name') }}" required autofocus>

            @if ($errors->has('rsv_class_name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_class_name') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group col-lg-3">
            <label for="name02" >Dia da Semana</label>
            <input id="rsv_week_day" type="text"  placeholder="Insira o nome" class="form-control{{ $errors->has('rsv_week_day') ? ' is-invalid' : '' }}" name="rsv_week_day" value="{{ old('rsv_week_day') }}" required autofocus>

            @if ($errors->has('rsv_week_day'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_week_day') }}</strong>
                                    </span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Buscar</button>


        <?php
        //                            isset($_POST['submit']);
        $user_name = filter_input(INPUT_POST, 'rsv_unit_name', FILTER_SANITIZE_STRING);
        echo $user_name;
        //
        $filter1= filter_input(INPUT_GET,'rsv_unit_name');
        $filter2= filter_input(INPUT_GET,'rsv_class_name');
        $filter3= filter_input(INPUT_GET,'rsv_week_day');

        echo $filter1;


        $rsv_unit_name=$filter1;
        $rsv_unit_name;
        $rsv_class=$filter2;
        $rsv_week_day=$filter3;



        ?>


    </div>

    <?php

    $conn = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT distinct rsv_start_time, rsv_end_time ,rsv_teacher_name from reserves
                               where rsv_unit_name='$rsv_unit_name' and rsv_week_day='$rsv_week_day'
                                                                    and rsv_class='$rsv_class'; ";
    $con1=$conn->query($query);



    ?>


    <table id='minhaTabela'>
        <thead>

        <tr>
            <th style="text-align: center">Hora Inicial</th>
            <th style="text-align: center">Hora Final</th>
            <th style="text-align: center">Professor</th>
            <th style="text-align: center">Informações Adicionais</th>
        <tr>
        </thead>


        <tbody id="tbody">
        <?php while($dados=$con1->fetch_array() ){?>
        <tr>
            <td style="font-family: Arial"><?php echo $dados ["rsv_start_time"];?></td>
            <td style="font-family: Arial"> <?php echo $dados ["rsv_end_time"];?> </td>
            <td style="font-family: Arial"> <?php echo $dados ["rsv_teacher_name"];?> </td>
            <td >
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                    CONSULTAR
                </button>
                <?php  $rsv_start_time= $dados ["rsv_start_time"] ;
                $rsv_end_time= $dados ["rsv_end_time"];?>

                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                            </div>
                            <div class="modal-body">

                                <?php

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select * from reserves where rsv_start_time= '$rsv_start_time' and rsv_end_time='$rsv_end_time'
                                                                                                                         and rsv_unit_name='MORUMBI'
                                                                                                                         and rsv_week_day='SEGUNDA-FEIRA'
                                                                                                                         and rsv_class='SALA 1';";
                                $con1=$conn->query($query);

                                ?>


                                <table id='minhaTabela'>
                                    <thead>

                                    <tr>
                                        <th style="text-align: center">Aluno</th>
                                        <th style="text-align: center">Código do Aluno</th>
                                        <th style="text-align: center">Tipo de Reserva</th>
                                        <th style="text-align: center">Curso</th>
                                        <th style="text-align: center">Mensalidade</th>
                                    <tr>
                                    </thead>


                                    <tbody id="tbody" style="font-family: Arial">
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <tr>
                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                        <td style="font-family: Arial"><?php echo $dados ["rsv_payment"];?></td>
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
        <?php }?>
        </tbody>


    </table>


</div>





////


<div class="element-example">
    <div class="ls-collapse">
        <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseFour">
							<h4 class="panel-title">Cadastrar Salas</h4>

						</span>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">

                <form role="form">
                    <fieldset>
                        <div class="row">

                            <div class="form-group col-lg-2">
                                <label for="">Sala</label>
                                <select class="form-control">
                                    <option value="SALA 1">SALA 1</option>
                                    <option value="SALA 2">SALA 2</option>
                                    <option value="SALA 3">SALA 3</option>
                                    <option value="SALA 4">SALA 4</option>
                                    <option value="SALA 5">SALA 5</option>
                                    <option value="SALA 6">SALA 6</option>
                                    <option value="SALA 7">SALA 7</option>
                                    <option value="SALA 8">SALA 8</option>
                                    <option value="SALA 9">SALA 9</option>
                                    <option value="SALA 10">SALA 10</option>
                                    <option value="SALA 11">SALA 11</option>
                                    <option value="SALA 12">SALA 12</option>
                                    <option value="SALA 13">SALA 13</option>
                                    <option value="SALA 14">SALA 14</option>
                                    <option value="SALA 15">SALA 15</option>
                                    <option value="SALA 16">SALA 16</option>
                                    <option value="SALA 17">SALA 17</option>
                                    <option value="SALA 18">SALA 18</option>
                                    <option value="SALA 19">SALA 19</option>
                                    <option value="SALA 20">SALA 20</option>
                                    <option value="SALA 21">SALA 21</option>
                                    <option value="SALA 22">SALA 22</option>
                                    <option value="SALA 23">SALA 23</option>
                                    <option value="SALA 24">SALA 24</option>
                                    <option value="SALA 25">SALA 25</option>
                                </select>
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
    <span ><span aria-hidden="true"  class="ico-calendar"  ></span> <a href="/reserves/admin_access/{{$dados['unt_name']}}/{{$contador}} " target="_blank" style="color: darkblue; font-family: 'Comic Sans MS' ">SALA <?php echo $contador ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <?php $contador+=1; }?>
</div>

<br>
<?php }?>

</div>

<div class="tab-pane" id="reserve">

    {!! Form::open(['method'=>'POST', 'action'=>'ReservesController@store']) !!}
    @csrf

    <div class="row">

        <div class="form-group col-lg-4">
            <label for="">Código do Professor</label>
            <select name="rsv_unit_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from users;";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["usr_code"];?>"><?php echo $dados ["usr_code"];?></option>

            </select>
        </div>

        <?php }?>
        <div class="form-group col-lg-3">
            <label for="name02">Professor</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">Bene</option>
                <option value="Professor">Everson</option>
                <option value="Aluno">Thais</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-lg-3">
            <label for="">Unidade</label>
            <select name="rsv_unit_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from units";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["unt_name"];?>"><?php echo $dados ["unt_name"];?></option>

            </select>
        </div>

        <?php }?>
        <div class="form-group col-lg-3">
            <label for="name02">Sala</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">Gestor</option>
                <option value="Professor">Professor</option>
                <option value="Aluno">Aluno</option>
            </select>
        </div>


        <div class="form-group col-lg-3">
            <label for="name02" >Hora Inicial</label>
            <input id="rsv_start_time" type="time"  class="form-control{{ $errors->has('rsv_start_time') ? ' is-invalid' : '' }}" name="rsv_start_time" value="{{ old('rsv_start_time') }}" required autofocus>

            @if ($errors->has('rsv_start_time'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_start_time') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group col-lg-3">
            <label for="name02" >Hora Final</label>
            <input id="rsv_end_time" type="time"  class="form-control{{ $errors->has('rsv_end_time') ? ' is-invalid' : '' }}" name="rsv_end_time" value="{{ old('rsv_start_time') }}" required autofocus>

            @if ($errors->has('rsv_end_time'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsv_end_time') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group col-lg-3">
            <label for="">Unidade</label>
            <select name="rsv_course_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from courses";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["crs_name"];?>"><?php echo $dados ["crs_name"];?></option>

            </select>
        </div>

        <div class="form-group col-lg-3">
            <label for="name02">Dia da Semana</label>
            <select name="rsv_week_day" class="form-control">
                <option value="SEGUNDA-FEIRA">SEGUNDA-FEIRA</option>
                <option value="TERCA-FEIRA">TERÇA-FEIRA</option>
                <option value="QUARTA-FEIRA">QUARTA-FEIRA</option>
                <option value="QUINTA-FEIRA">QUINTA-FEIRA</option>
                <option value="SEXTA-FEIRA">SEXTA-FEIRA</option>
                <option value="SABADO">SÁBADO</option>
                <option value="DOMINGO">DOMINGO</option>
            </select>
        </div>

        <div class="form-group col-lg-3">
            <label for="">Professor</label>
            <select name="rsv_course_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from courses";
                $con1=$conn->query($query);
                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["crs_name"];?>"><?php echo $dados ["crs_name"];?></option>

            </select>
        </div>


        <div class="form-group col-lg-5">
            <label for="name02" >Telefone</label>
            <input id="telephone" type="telephone" placeholder="Insira o Telefone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required>

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
            <label for="name02">Categoria</label>
            <select name="role" class="form-control">
                <option value="Administrador">Gestor</option>
                <option value="Professor">Professor</option>
                <option value="Aluno">Aluno</option>
            </select>
        </div>



    </div>
    <div class="row">

        <div class="form-group col-lg-4">
            <label for="name02">Endereço</label>
            <input id="address" type="address" placeholder="Insira o endereço" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group col-lg-1">
            <label for="name02">Nº</label>
            <input id="number" type="number" placeholder="Ex:123" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required>

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
            <input id="zip_code" type="zip_code" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" required>

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

//////



    </form>




    {!! Form::open(['method'=>'POST', 'action'=>'ReservesController@store']) !!}
    @csrf

    <div class="row">

        <div class="form-group col-lg-2">
            <label for="">Código do Professor</label>
            <select name="rsv_unit_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from users;";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["usr_code_user"];?>"><?php echo $dados ["usr_code_user"];?></option>
                    <?php }?>

            </select>
        </div>


        <div class="form-group col-lg-5">
            <label for="name02">Professor</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">Bene</option>
                <option value="Professor">Everson</option>
                <option value="Aluno">Thais</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-lg-2">
            <label for="">Código do Aluno</label>
            <select name="rsv_unit_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from users;";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["usr_code_user"];?>"><?php echo $dados ["usr_code_user"];?></option>
                    <?php }?>
            </select>
        </div>


        <div class="form-group col-lg-5">
            <label for="name02">Aluno</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">Alex</option>
                <option value="Professor">Jose</option>
                <option value="Aluno">Mario</option>
            </select>
        </div>

        <div class="form-group col-lg-3">
            <label for="name02">Tipo de Reserva</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">MATRICULADO</option>
                <option value="Professor">TESTE</option>
                <option value="Aluno">REPOSICAO</option>
            </select>
        </div>

    </div>


    <div class="row">

        <div class="form-group col-lg-2">
            <label for="">Unidade</label>
            <select name="rsv_unit_name" class="form-control">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * from units;";
                $con1=$conn->query($query);

                ?>
                <?php while($dados=$con1->fetch_array() ){?>
                <option value="<?php echo $dados["unt_name"];?>"><?php echo $dados ["unt_name"];?></option>
            <?php }?>
            </select>
        </div>


        <div class="form-group col-lg-2">
            <label for="name02">Sala</label>
            <select name="rsv_class" class="form-control">
                <option value="Administrador">SALA 1</option>
                <option value="Professor">SALA 2</option>
                <option value="Aluno">SALA 3</option>
            </select>
        </div>

        <div class="form-group col-lg-2">
            <label for="name02">Hora Inicial</label>
            <select name="rsv_start_time" class="form-control">
                <option value="Administrador">7:00</option>
                <option value="Professor">8:00</option>
                <option value="Aluno">9:00</option>
            </select>
        </div>

        <div class="form-group col-lg-2">
            <label for="name02">Hora Final</label>
            <select name="rsv_end_time" class="form-control">
                <option value="Administrador">8:00</option>
                <option value="Professor">9:00</option>
                <option value="Aluno">10:00</option>
            </select>
        </div>

    </div>


    </form>



    <?php

    $servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "u7pbeubj6ga8pe6i";
    $password = "ehtncz098sbfafvv";
    $dbname = "fhzg7wv0o15wusmv";

    ?>

    <html>

    {{--<link href="{{ asset('assets/css/libs/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
    <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: #ddd;
                font-family: 'Arial';
            }
            .nav_tabs{
                width: 1284px;
                height: 450px;
                margin: 0px auto;
                background-color: #fff;
                position: relative;
            }

            .nav_tabs ul{
                list-style: none;
            }

            .nav_tabs ul li{
                float: left;
            }

            .nav_tabs label{
                width: 204px;
                padding: 5px;
                background-color: #343a48;
                display: block;
                color: #fff;
                cursor: pointer;
                text-align: center;
            }
            .rd_tabs:checked ~ label{
                background-color: #e54e43;
            }

            .rd_tabs{
                display: none;
            }

            .content{
                border-top: 5px solid #e54e43;
                /*background-color:#f7c6c5;*/
                background-color:black;
                display: none;
                position: absolute;
                height: 538px;
                width: 1284px;
                left: 0;
            }

            .rd_tabs:checked ~ .content{
                display: block;
            }
            div.title{
                text-align: center;
            }

            table{
                border-collapse: collapse

            }
            table, td, th{
                /*border: 1.4px solid rgb(0101, 25, 25);*/
                border: black solid ;
                padding: 7px;
                background-color: #fff;
            }


        </style>


    </head>

    <body>
    <div class="title">
        <h2> UNIDADE {{$unt_name}} - SALA {{$number_class}}</h2>
    </div>





    <nav class="nav_tabs">
        <ul>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label for="tab1">SEGUNDA-FEIRA</label>
                <div class="content">
                    <?php


                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='segunda-feira'; ";

                    $con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

                    if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?>
                    <div class="container">
                        <div id="dvTabela" class="table-responsive">

                            <table id="tb_segunda">
                                <thead>
                                <tr>
                                    <th style="background-color: #b9bbbe">Hora Inicial</th>
                                    <th style="background-color: #b9bbbe">Hora Final</th>
                                    <th style="background-color: #b9bbbe">Professor</th>
                                    <th style="background-color: #b9bbbe">Informações Adicionais</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php while($dado=$con->fetch_array()){?>
                                <tr>
                                    <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                                    <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                                    <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                                    <td >
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta1">
                                            CONSULTAR
                                        </button>
                                        <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                        $rsv_end_time= $dado ["rsv_end_time"];?>

                                        <div class="modal fade" id="modalConsulta1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                                    </div>
                                                    <div class="modal-body">

                                                        <?php

                                                        $conn = new mysqli($servername, $username, $password, $dbname);


                                                        $query = "select  rsv.rsv_id, rsv.rsv_student_name, rsv.rsv_student_code, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='SEGUNDA-FEIRA'
                                                              and   rsv.rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                        $con1=$conn->query($query);

                                                        ?>


                                                        <table id='minhaTabela'>
                                                            <thead>

                                                            <tr>
                                                                <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                                <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                                <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                                <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                                <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                            <tr>
                                                            </thead>


                                                            <tbody id="tbody" style="font-family: Arial">
                                                            <?php while($dados=$con1->fetch_array() ){?>
                                                            <tr>
                                                                <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                                <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                                <td style="font-family: Arial"><?php echo $dados ["rst_name"];?></td>
                                                                <td style="font-family: Arial"><?php echo $dados ["crs_name"];?></td>
                                                                <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                                <?php }?>
                            </table>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label for="tab2">TERÇA-FEIRA</label>
                <div class="content">
                    <?php


                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='terca-feira'; ";
                    $con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

                    if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='TERÇA-FEIRA'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                        <?php }?>
                    </table>



                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab3">
                <label for="tab3">QUARTA-FEIRA</label>
                <div class="content">
                    <?php

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='quarta-feira'; ";
                    $con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

                    if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='QUARTA-FEIRA'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                        <?php }?>
                    </table>


                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab4">
                <label for="tab4">QUINTA-FEIRA</label>
                <div class="content">
                    <?php

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='quinta-feira'; ";
                    $con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

                    if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='QUINTA-FEIRA'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                        <?php }?>
                    </table>



                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab5">
                <label for="tab5">SEXTA-FEIRA</label>
                <div class="content">
                    <?php

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='sexta-feira'; ";
                    $con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

                    if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='SEXTA-FEIRA'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                        <?php }?>
                    </table>



                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab6">
                <label for="tab6">SÁBADO</label>
                <div class="content">
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='sabado'; ";
                    $con=$conn->query($query);
                    if ($conn->multi_query($query) === TRUE) {
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();
                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='SABADO'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_reserve_type"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_course_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                        <?php }?>
                    </table>



                </div>
            </li>

            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab7">
                <label for="tab7">DOMINGO</label>
                <div class="content">
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query = "select distinct rsv_start_time,rsv_end_time,rsv_teacher_name from reserves where unt_id='$unt_id' and rsv_class='sala $number_class' and rsv_week_day='domingo'; ";
                    $con=$conn->query($query);
                    if ($conn->multi_query($query) === TRUE) {
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    $conn->close();
                    ?>

                    <table id="tb_segunda">
                        <thead>
                        <tr>
                            <th style="background-color: #b9bbbe">Hora Inicial</th>
                            <th style="background-color: #b9bbbe">Hora Final</th>
                            <th style="background-color: #b9bbbe">Professor</th>
                            <th style="background-color: #b9bbbe">Informações Adicionais</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php while($dado=$con->fetch_array()){?>
                        <tr>
                            <td title="rsv_time"  style="background-color: #f9d6d5"><?php echo $dado["rsv_start_time"]?></td>
                            <td title="rsv_teacher" style="background-color: #f9d6d5" ><?php echo $dado["rsv_end_time"]?></td>
                            <td title="rsv_instrument" ><?php echo $dado["rsv_teacher_name"]?></td>
                            <td >
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConsulta">
                                    CONSULTAR
                                </button>
                                <?php  $rsv_start_time= $dado ["rsv_start_time"] ;
                                $rsv_end_time= $dado ["rsv_end_time"];?>

                                <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                $query = "select rsv_student_name, rsv_student_code, rst_name, crs_name, rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs
                                                              where rsv_start_time='$rsv_start_time'
                                                              and   rsv_end_time = '$rsv_end_time'
                                                              and   rsv_week_day='DOMINGO'
                                                              and   rsv_class='SALA $number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.crs_id=crs.crs_id;";
                                                $con1=$conn->query($query);

                                                ?>


                                                <table id='minhaTabela'>
                                                    <thead>

                                                    <tr>
                                                        <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Código do Aluno</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Tipo de Reserva</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                        <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <tr>
                                                    </thead>


                                                    <tbody id="tbody" style="font-family: Arial">
                                                    <?php while($dados=$con1->fetch_array() ){?>
                                                    <tr>
                                                        <td style="font-family: Arial; background-color: #a6e1ec"><?php echo $dados ["rsv_student_name"];?><br><a href="{{route('reserves.show', $dados["rsv_id"])}}"> Editar Reserva </a></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rsv_student_code"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["rst_name"];?></td>
                                                        <td style="font-family: Arial"><?php echo $dados ["crs_name"];?></td>
                                                        <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13"><strong>R$ <?php echo $dados ["rsv_payment"];?></strong></td>
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
                    <?php }?>
                    </table>



                </div>
            </li>

        </ul>
    </nav>

    <script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


    <script>


        //SCRIPT PARA DEIXAR A TABELA EDITÁVEL SE ALGUM DIA PRECISAR

        // $(document).ready(function(){
        //     $('#tb_segunda tbody tr td.editavel').click(function(){
        //         // if($('td>input').length > 0){
        //         //     return;
        //         // }
        //         var conteudoOriginal = $(this).text();
        //         var novoElemento= $('<input/>',{type: 'text', value: conteudoOriginal});
        //         $(this).html(novoElemento.bind('blur keydown', function(e) {
        //             var keyCode = e.which;
        //             if (keyCode == 13){
        //                 var conteudoNovo = $(this).val();
        //                 if (conteudoNovo != "") {
        //                     var objeto = $(this);
        //                     $.ajax({
        //                         type: "POST",
        //                         url: "alterar_reservas.php",
        //                         data: {
        //                             id: $(this).parents('tr').children().first().text(),
        //                             campo: $(this).parent().attr('title'),
        //                             valor: conteudoNovo
        //                         },
        //
        //                         success: function (result) {
        //                             objeto.parent().html(conteudoNovo);
        //                             $('body').append(result)
        //                         }
        //
        //                     })
        //                 }
        //
        //             }if(e.type == "blur"){
        //                 $(this).parent().html(conteudoOriginal);
        //             }
        //         }))
        //         $(this).children().select()
        //     });
        // })


    </script>

    </body>

    </html>

///// WELCOME ADMINISTRATOR BACKUP //////

    <?php
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "laravel_cms";

    $servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "u7pbeubj6ga8pe6i";
    $password = "ehtncz098sbfafvv";
    $dbname = "fhzg7wv0o15wusmv";

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


            /**{*/
            /*margin: 10px;*/
            /*padding: -5px;*/
            /*}*/
            /**{*/
            /*margin: auto;*/
            /*padding: 0;*/
            /*}*/


            #minhaTabela{
                width:100%;
                margin:0 auto;
                border:0;
                box-shadow: 0 5px 30px darkgrey;
                border-spacing: 0;

            }

            #minhaTabela thead th{
                font-weight: bold;
                background-color: black;
                color:white;

                padding:5px 10px;

            }

            #minhaTabela tr td{
                padding:10px 5px;
                text-align: center;


                cursor: pointer; /**importante para não mostrar cursor de texto**/
            }

            #minhaTabela tr td:last-child{

                text-align: center;

            }

            /**Cores**/
            #minhaTabela tr:nth-child(odd){
                background-color: #eee;
            }

            /**Cor quando passar por cima**/
            #minhaTabela tr:hover td{
                background-color: #feffb7;
            }

            /**Cor quando selecionado**/
            #minhaTabela tr.selecionado td{
                background-color: #aff7ff;
            }
            #txtBusca{
                width: 100%;
                height: 30px;
                padding-left: 5px;
                box-sizing: border-box;
                margin: 10px auto;

            }



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
            <div >Bem vindo gestor {{Auth::user()->name}} ao <strong>Hertz System</strong> !</div>
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
                                <input id="name" type="text"  placeholder="Insira o nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >CPF</label>
                                <input id="cpf" type="cpf" placeholder="Insira o CPF" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >Celular</label>
                                <input id="cell_phone" type="cell_phone"  placeholder="Insira o Celular" class="form-control{{ $errors->has('cell_phone') ? ' is-invalid' : '' }}" name="cell_phone" value="{{ old('cell_phone') }}" required>

                                @if ($errors->has('cell_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="name02" >Telefone</label>
                                <input id="telephone" type="telephone" placeholder="Insira o Telefone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required>

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
                                <label for="name02">Categoria</label>
                                <select name="role" class="form-control">
                                    <option value="Administrador">Gestor</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Aluno">Aluno</option>
                                </select>
                            </div>
                            <?php

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if(isset($_POST['submit']))
                            {
                                $role= $_POST['role'];
                                $sql= $conn->prepare("Insert into users(role) values (:role);");
                                $conn->begin_transaction();
                                $sql->execute(array(':role'=>$role));
                                $conn->commit();
                            }
                            ?>


                        </div>
                        <div class="row">

                            <div class="form-group col-lg-4">
                                <label for="name02">Endereço</label>
                                <input id="address" type="address" placeholder="Insira o endereço" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-lg-1">
                                <label for="name02">Nº</label>
                                <input id="number" type="number" placeholder="Ex:123" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required>

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
                                <input id="zip_code" type="zip_code" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" required>

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
                                                                    <input type="text" id='txtBusca' placeholder="Digite o nome da Unidade" class="  input"/>

                                                                    <table id='minhaTabela'>
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
                                                    <div class="form-group col-lg-2">
                                                        <label for="">Valor de Mensalidade</label>
                                                        <input type="text" class="form-control" id="value" name="value" placeholder="Ex: R$ 90,00">
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


                                                                    <table id='minhaTabela'>
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
                                                        <label for="">Curso</label>
                                                        <input type="text" class="form-control" id="course" name="course" placeholder="Ex: Violão">
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                        <label for="">Mensalidade</label>
                                                        <select name="pay_id" class="form-control">
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


                                                                    <table id='minhaTabela'>
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
                                                        <label for="">Tipo de Reserva</label>
                                                        <input type="text" class="form-control" id="rst_name" name="rst_name" placeholder="Ex: REPOSIÇÃO">
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


                                                                    <table id='minhaTabela'>
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
                        <script src="js/select_options/code_teacher_for_name_teacher.js"> </script>
                        <script src="js/select_options/code_student_for_name_student.js"> </script>
                        <script src="js/select_options/unit_name_for_unit_classes.js"> </script>
                        <script src="js/select_options/course_name_for_course_payment.js"> </script>


                        {!! Form::open(['method'=>'POST', 'action'=>'ReservesController@store']) !!}
                        @csrf

                        <div class="row">





                            <div class="form-group col-lg-2">
                                <label for="">Código do Professor</label>
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


                            <div class="form-group col-lg-5">
                                <label for="name02">Professor</label>
                                <span class="carregando">Aguarde, carregando...</span>
                                <select  id="name_teacher" name="rsv_teacher_name" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-lg-2">
                                <label for="">Código do Aluno</label>
                                <select  id="code_student" name="rsv_student_code" class="form-control">
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


                            <div class="form-group col-lg-5">
                                <label for="name02">Aluno</label>
                                <select id="name_student" name="rsv_student_name" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>


                            <div class="form-group col-lg-3">
                                <label for="name02">Tipo de Reserva</label>
                                <select name="rst_id" class="form-control">
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

                        <div class="row">

                            <div class="form-group col-lg-2">
                                <label for="">Unidade</label>
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


                            <div class="form-group col-lg-2">
                                <label for="name02">Sala</label>
                                <select id="unit_classes"  name="rsv_class" class="form-control">
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
                                <label for="name02">Dia da Semana</label>
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

                            <div class="form-group col-lg-4">
                                <label for="">Curso</label>
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

                            <div class="form-group col-lg-3">
                                <label for="name02">Mensalidade</label>
                                <select id="course_payment" name="rsv_payment" class="form-control">
                                    <option value="">-----</option>
                                </select>
                            </div>

                        </div>



                        <div class="box-actions">
                            <button type="submit" class="btn btn-info">Cadastrar</button>

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



                            <input type="text" id='txtBusca' placeholder="Buscar por nome, função, email, cpf..." class="  input"/>

                            <table id='minhaTabela'>
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


                                <tbody id="tbody"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?><br><a href="{{route('users.show', $dados["usr_id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["usr_code_user"];?> </td><td> <?php echo $dados ["usr_role"];?> </td><td> <?php echo $dados ["usr_email"];?> </td><td> <?php echo $dados ["usr_cpf"];?></td><td> <?php echo $dados ["usr_cell_phone"];?></td><td> <?php echo $dados ["usr_telephone"];?></td><td> <?php echo $dados ["usr_address"];?></td><td> <?php echo $dados ["usr_number"];?></td><td> <?php echo $dados ["usr_neighborhood"];?></td><td> <?php echo $dados ["usr_zip_code"];?></td></tr><?php }?></tbody>


                            </table>



                            <script>


                                var tbody = document.getElementById("tbody");


                                document.getElementById("txtBusca").addEventListener("keyup",function () {
                                    var busca = document.getElementById("txtBusca").value.toLowerCase();
                                    //console.log(busca);

                                    for(var i = 0; i < tbody.childNodes.length; i++) {
                                        var achou = false;
                                        var tr = tbody.childNodes[i];
                                        //console.log(tr);
                                        var td = tr.childNodes;
                                        //console.log(td);



                                        //
                                        for (var j = 0; j < td.length; j++) {
                                            //console.log(j);
                                            var value = td[j].childNodes[0].nodeValue.toLowerCase();


                                            //console.log(td[j].childNodes[0].nodeValue.toLowerCase());
                                            if (value.indexOf(busca) >= 0) {
                                                //console.log(value.indexOf(busca));
                                                achou = true;
                                            }
                                        }
                                        // console.log(achou);
                                        if(achou){
                                            tr.style.display = "table-row";
                                        }else{
                                            tr.style.display = "none";
                                        }
                                    }
                                });


                                var tabela = document.getElementById("minhaTabela");
                                var linhas = tabela.getElementsByTagName("tr");

                                for(var i = 1; i < linhas.length; i++){
                                    var linha = linhas[i];

                                    linha.addEventListener("click", function(){
                                        //Adicionar ao atual
                                        selLinha(this, false); //Selecione apenas um
                                        //selLinha(this, true); //Selecione quantos quiser
                                    });
                                }

                                /**
                                 Caso passe true, você pode selecionar multiplas linhas.
                                 Caso passe false, você só pode selecionar uma linha por vez.
                                 **/
                                function selLinha(linha, multiplos){
                                    if(!multiplos){
                                        var linhas = linha.parentElement.getElementsByTagName("tr");
                                        for(var i = 0; i < linhas.length; i++){
                                            var linha_ = linhas[i];
                                            linha_.classList.remove("selecionado");
                                        }
                                    }
                                    linha.classList.toggle("selecionado");
                                }


                            </script>

                        </div>




                    </div>

                    <div class="tab-pane" id="reports">



                    </div>


                </div>
            </div>



        </div>
    </main>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
    <script language="JavaScript">

        /////////////////////////////////////////////
        //abrir janela no centro da tela          ///
        //Eric Silva eric_silva@javamail.com.br///
        ////////////////////////////////////////////

        function abreJanela(Url,NomeJanela,width,height,extras) {
            var largura = width;
            var altura = height;
            var adicionais= extras;
            var topo = (screen.height-altura)/2;
            var esquerda = (screen.width-largura)/2;
            novaJanela=window.open(''+ Url + '',''+ NomeJanela + '','width=' + largura + ',height=' + altura + ',top=' + topo + ',left=' + esquerda + ',features=' + adicionais + '');
            novaJanela.focus();
        }
    </script>
    </body>
    </html>


    ----------------/////////////////////-----------------------------

    @extends('layouts.app')

    @section('content')
        <div id="fundo-externo">
            <div id="fundo">
                <img src="http://flickholdr.com/1600/1200/sunset" alt="" />
            </div>
            <div class="container">

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
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu sua senha?') }}
                                                </a>
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



            ---------------------------

            <?php
            //$servername = "localhost";
            //$username = "root";
            //$password = "";
            //$dbname = "laravel_cms";

            $servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
            $username = "u7pbeubj6ga8pe6i";
            $password = "ehtncz098sbfafvv";
            $dbname = "fhzg7wv0o15wusmv";

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


                    /**{*/
                    /*margin: 10px;*/
                    /*padding: -5px;*/
                    /*}*/
                    /**{*/
                    /*margin: auto;*/
                    /*padding: 0;*/
                    /*}*/


                    #minhaTabela{
                        width:100%;
                        margin:0 auto;
                        border:0;
                        box-shadow: 0 5px 30px darkgrey;
                        border-spacing: 0;

                    }

                    #minhaTabela thead th{
                        font-weight: bold;
                        background-color: black;
                        color:white;

                        padding:5px 10px;

                    }

                    #minhaTabela tr td{
                        padding:10px 5px;
                        text-align: center;


                        cursor: pointer; /**importante para não mostrar cursor de texto**/
                    }

                    #minhaTabela tr td:last-child{

                        text-align: center;

                    }

                    /**Cores**/
                    #minhaTabela tr:nth-child(odd){
                        background-color: #eee;
                    }

                    /**Cor quando passar por cima**/
                    #minhaTabela tr:hover td{
                        background-color: #feffb7;
                    }

                    /**Cor quando selecionado**/
                    #minhaTabela tr.selecionado td{
                        background-color: #aff7ff;
                    }
                    #txtBusca{
                        width: 100%;
                        height: 30px;
                        padding-left: 5px;
                        box-sizing: border-box;
                        margin: 10px auto;

                    }



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

            <main  class="main">
                <div class="container">
                    <div >Bem vindo gestor {{Auth::user()->name}} ao <strong>Hertz System</strong> !</div>
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

                        <div  class="tab-content">
                            <div class="tab-pane active in" id="register">

                                {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store']) !!}
                                @csrf

                                <div class="row">
                                    <div class="form-group col-lg-5">
                                        <label for="name02" >Nome</label>
                                        <input id="name" type="text"  placeholder="Insira o nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-5">
                                        <label for="name02" >CPF</label>
                                        <input id="cpf" type="cpf" placeholder="Insira o CPF" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>

                                        @if ($errors->has('cpf'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-5">
                                        <label for="name02" >Celular</label>
                                        <input id="cell_phone" type="cell_phone"  placeholder="Insira o Celular" class="form-control{{ $errors->has('cell_phone') ? ' is-invalid' : '' }}" name="cell_phone" value="{{ old('cell_phone') }}" required>

                                        @if ($errors->has('cell_phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-5">
                                        <label for="name02" >Telefone</label>
                                        <input id="telephone" type="telephone" placeholder="Insira o Telefone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required>

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
                                        <label for="name02">Categoria</label>
                                        <select name="role" class="form-control">
                                            <option value="Administrador">Gestor</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Aluno">Aluno</option>
                                        </select>
                                    </div>
                                    <?php

                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    if(isset($_POST['submit']))
                                    {
                                        $role= $_POST['role'];
                                        $sql= $conn->prepare("Insert into users(role) values (:role);");
                                        $conn->begin_transaction();
                                        $sql->execute(array(':role'=>$role));
                                        $conn->commit();
                                    }
                                    ?>


                                </div>
                                <div class="row">

                                    <div class="form-group col-lg-4">
                                        <label for="name02">Endereço</label>
                                        <input id="address" type="address" placeholder="Insira o endereço" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-1">
                                        <label for="name02">Nº</label>
                                        <input id="number" type="number" placeholder="Ex:123" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required>

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
                                        <input id="zip_code" type="zip_code" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" required>

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
                                                                            <input type="text" id='txtBusca' placeholder="Digite o nome da Unidade" class="  input"/>

                                                                            <table id='minhaTabela'>
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
                                                            <div class="form-group col-lg-2">
                                                                <label for="">Valor de Mensalidade</label>
                                                                <input type="text" class="form-control" id="value" name="value" placeholder="Ex: R$ 90,00">
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


                                                                            <table id='minhaTabela'>
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
                                                                <label for="">Curso</label>
                                                                <input type="text" class="form-control" id="course" name="course" placeholder="Ex: Violão">
                                                            </div>
                                                            <div class="form-group col-lg-2">
                                                                <label for="">Mensalidade</label>
                                                                <select name="pay_id" class="form-control">
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


                                                                            <table id='minhaTabela'>
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
                                                                <label for="">Tipo de Reserva</label>
                                                                <input type="text" class="form-control" id="rst_name" name="rst_name" placeholder="Ex: REPOSIÇÃO">
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


                                                                            <table id='minhaTabela'>
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



                                    <input type="text" id='txtBusca' placeholder="Buscar por nome, função, email, cpf..." class="  input"/>

                                    <table id='minhaTabela'>
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


                                        <tbody id="tbody"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["usr_name"];?><br><a href="{{route('users.show', $dados["usr_id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["usr_code_user"];?> </td><td> <?php echo $dados ["usr_role"];?> </td><td> <?php echo $dados ["usr_email"];?> </td><td> <?php echo $dados ["usr_cpf"];?></td><td> <?php echo $dados ["usr_cell_phone"];?></td><td> <?php echo $dados ["usr_telephone"];?></td><td> <?php echo $dados ["usr_address"];?></td><td> <?php echo $dados ["usr_number"];?></td><td> <?php echo $dados ["usr_neighborhood"];?></td><td> <?php echo $dados ["usr_zip_code"];?></td></tr><?php }?></tbody>


                                    </table>



                                    <script>


                                        var tbody = document.getElementById("tbody");


                                        document.getElementById("txtBusca").addEventListener("keyup",function () {
                                            var busca = document.getElementById("txtBusca").value.toLowerCase();
                                            //console.log(busca);

                                            for(var i = 0; i < tbody.childNodes.length; i++) {
                                                var achou = false;
                                                var tr = tbody.childNodes[i];
                                                //console.log(tr);
                                                var td = tr.childNodes;
                                                //console.log(td);



                                                //
                                                for (var j = 0; j < td.length; j++) {
                                                    //console.log(j);
                                                    var value = td[j].childNodes[0].nodeValue.toLowerCase();


                                                    //console.log(td[j].childNodes[0].nodeValue.toLowerCase());
                                                    if (value.indexOf(busca) >= 0) {
                                                        //console.log(value.indexOf(busca));
                                                        achou = true;
                                                    }
                                                }
                                                // console.log(achou);
                                                if(achou){
                                                    tr.style.display = "table-row";
                                                }else{
                                                    tr.style.display = "none";
                                                }
                                            }
                                        });


                                        var tabela = document.getElementById("minhaTabela");
                                        var linhas = tabela.getElementsByTagName("tr");

                                        for(var i = 1; i < linhas.length; i++){
                                            var linha = linhas[i];

                                            linha.addEventListener("click", function(){
                                                //Adicionar ao atual
                                                selLinha(this, false); //Selecione apenas um
                                                //selLinha(this, true); //Selecione quantos quiser
                                            });
                                        }

                                        /**
                                         Caso passe true, você pode selecionar multiplas linhas.
                                         Caso passe false, você só pode selecionar uma linha por vez.
                                         **/
                                        function selLinha(linha, multiplos){
                                            if(!multiplos){
                                                var linhas = linha.parentElement.getElementsByTagName("tr");
                                                for(var i = 0; i < linhas.length; i++){
                                                    var linha_ = linhas[i];
                                                    linha_.classList.remove("selecionado");
                                                }
                                            }
                                            linha.classList.toggle("selecionado");
                                        }


                                    </script>

                                </div>




                            </div>

                            <div class="tab-pane" id="reports">


                                <div class="element-example">
                                    <div class="ls-collapse">
                                        <div class="panel-heading">
						<span data-toggle="collapse" data-target="#collapseBasicReport">
							<h4 class="panel-title">Relatório - Renda Obtida nas Unidades e Cada Professor</h4>

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

                                                        <table id='minhaTabela'>
                                                            <thead>

                                                            <tr>


                                                            <tr>
                                                            </thead>


                                                            <tbody id="tbody">
                                                            <tr>

                                                                <td> <a href="/report_units_return_money/{{$dados['unt_id']}}/{{$dados['unt_name']}}/{{$dados['unt_number_classes']}}"   target="_blank"><h4 class="ico-libreoffice" style="color: #2e6da4" >Relatório Renda Total Unidade {{$dados['unt_name']}}</h4></a></td>

                                                            </tr>
                                                            </tbody>


                                                        </table>

                                                    </div>







                                                </div>




                                                <br>
                                                <br>
                                            <?php }?>

                                                <div id="dvTabela">

                                                    <table id='minhaTabela'>
                                                        <thead>

                                                        <tr>


                                                        <tr>
                                                        </thead>


                                                        <tbody id="tbody">
                                                        <tr>

                                                            <td> <a href="/report_salary_teachers "   target="_blank"><h4 class="ico-libreoffice" style="color: #4c110f" >Relatório Renda Por Cada Professor</h4></a></td>

                                                        </tr>
                                                        </tbody>


                                                    </table>

                                                </div>




                                                <script>

                                                    var tabela = document.getElementById("minhaTabela");
                                                    var linhas = tabela.getElementsByTagName("tr");

                                                    for(var i = 1; i < linhas.length; i++){
                                                        var linha = linhas[i];

                                                        linha.addEventListener("click", function(){
                                                            //Adicionar ao atual
                                                            selLinha(this, false); //Selecione apenas um
                                                            //selLinha(this, true); //Selecione quantos quiser
                                                        });
                                                    }

                                                    /**
                                                     Caso passe true, você pode selecionar multiplas linhas.
                                                     Caso passe false, você só pode selecionar uma linha por vez.
                                                     **/
                                                    function selLinha(linha, multiplos){
                                                        if(!multiplos){
                                                            var linhas = linha.parentElement.getElementsByTagName("tr");
                                                            for(var i = 0; i < linhas.length; i++){
                                                                var linha_ = linhas[i];
                                                                linha_.classList.remove("selecionado");
                                                            }
                                                        }
                                                        linha.classList.toggle("selecionado");
                                                    }


                                                </script>



                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>



                </div>
            </main>

            <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
            <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
            <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
            <script language="JavaScript">

                /////////////////////////////////////////////
                //abrir janela no centro da tela          ///
                //Eric Silva eric_silva@javamail.com.br///
                ////////////////////////////////////////////

                function abreJanela(Url,NomeJanela,width,height,extras) {
                    var largura = width;
                    var altura = height;
                    var adicionais= extras;
                    var topo = (screen.height-altura)/2;
                    var esquerda = (screen.width-largura)/2;
                    novaJanela=window.open(''+ Url + '',''+ NomeJanela + '','width=' + largura + ',height=' + altura + ',top=' + topo + ',left=' + esquerda + ',features=' + adicionais + '');
                    novaJanela.focus();
                }
            </script>
            </body>
            </html>

        </div>






        //////////////////////



        <?php

        //use Illuminate\Support\Facades\Auth;$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "laravel_cms";

        use Illuminate\Support\Facades\Auth;
        $servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "u7pbeubj6ga8pe6i";
        $password = "ehtncz098sbfafvv";
        $dbname = "fhzg7wv0o15wusmv";

        $conn = new mysqli($servername, $username, $password, $dbname);

        //$teacher_code=Auth::user()->usr_code_user;
        //$week_day="SEGUNDA";

        $query = "SELECT * from progress where rsv_id=$rsv_id;";
        //$query = "SELECT * from progress where pro_week_day='SEGUNDA' and pro_teacher_code='$teacher_code' and pro_student_code='$student_code'";

        $con1=$conn->query($query);

        //Auth::user()->id;





        ?>

        {{--<script type="text/javascript">--}}
        {{--window.onload = function()--}}
        {{--{--}}
        {{--document.getElementById('student_code').value="{{$student_code}}";--}}
        {{--}--}}
        {{--</script>--}}



        <head>
            <title>Andamento das Aulas</title>
            <meta charset="utf 8">
            <style>



                .floatLeft{float:left}


                div.title{
                    text-align: center;
                }
                /*table{*/
                /*border-collapse: collapse;*/
                /*text-align: center;*/
                /*}*/

                /*table, td, th{*/
                /*border: 1.4px solid rgb(0101, 25, 25);*/
                /*padding: 10px;*/
                /*background-color: #fff;*/
                /*margin: auto;*/
                /*}*/


                /*body{*/
                /*font-family:sans-serif;*/
                /*}*/

                *{
                    margin: 10px;
                    padding: -5px;
                }
                /**{*/
                /*margin: auto;*/
                /*padding: 0;*/
                /*}*/


                #minhaTabela{
                    width:98%;
                    margin:0 auto;
                    border:0;
                    box-shadow: 0 5px 30px darkgrey;
                    border-spacing: 0;

                }

                #minhaTabela thead th{
                    font-weight: bold;
                    background-color: black;
                    color:white;

                    padding:5px 10px;

                }

                #minhaTabela tr td{
                    padding:10px 5px;
                    text-align: center;


                    cursor: pointer; /**importante para não mostrar cursor de texto**/
                }

                #minhaTabela tr td:last-child{

                    text-align: center;

                }

                /**Cores**/
                #minhaTabela tr:nth-child(odd){
                    background-color: #eee;
                }

                /**Cor quando passar por cima**/
                #minhaTabela tr:hover td{
                    background-color: #feffb7;
                }

                /**Cor quando selecionado**/
                #minhaTabela tr.selecionado td{
                    background-color: #aff7ff;
                }


                /*button#visualizarDados{*/
                /*background-color: white;*/
                /*border: 1px solid black;*/
                /*width:30%;*/
                /*margin: 10px auto;*/
                /*padding:10px 0;*/
                /*display: block;*/
                /*color: black;*/
                /*}*/

                .maxWidth{
                    max-width: 850px;
                    width:100%;

                }
                .input{
                    width: 100%;
                    height: 30px;
                    padding-left: 5px;
                    box-sizing: border-box;
                    margin: 10px auto;

                }

                .estrelas input[type=radio]{
                    display: none;
                }.estrelas label i.fa:before{
                     content: '\f005';
                     color: #FC0;
                 }.estrelas  input[type=radio]:checked  ~ label i.fa:before{
                      color: #CCC;
                  }


            </style>

        </head>

        <link rel="stylesheet" type="text/css"   href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
        <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css" media="screen" rel="stylesheet" type="text/css" />


        <body>

        <div class="title">
            <h1> Andamento das aulas </h1>
            <hr>
        </div>





        <div class="container">


            <div>
                <div>
                    <button class="button floatLeft"  data-toggle="modal" data-target="#new_lesson"  style="border:1px solid; padding: 11px 21px; vertical-align: middle; background:#2D888F; color:white;border-radius:6px; font-size: 20px; font-family:helvetica, serif;text-decoration:none;">Adicionar Aula</button>

                    <div class="modal fade" id="new_lesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">ADICIONAR AULA</h4>

                                </div>
                                <div class="modal-body">

                                    <form action="/new_lesson/admin_access/{{$rsv_id}}" method="POST">
                                        @csrf



                                        <div class="form-group row">
                                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                                            <div class="col-md-6">
                                                <input id="lesson_input" type="text" class="form-control{{ $errors->has('lesson_input') ? ' is-invalid' : '' }}" name="lesson_input" value="{{ old('lesson_input') }}" required autofocus>

                                                @if ($errors->has('lesson_input'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lesson_input') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="row date-range">
                                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                                            <div class="col-lg-5">
                                                <label for="example1" class="sr-only">Data</label>
                                                <div class="input-group datepicker">
                                                    <input type="text" class="form-control date-mask to-date" placeholder="dd/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group row">
                                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Conteudo') }}</label>

                                            <div class="col-md-6">
                                                <input id="content_input" type="text" class="form-control{{ $errors->has('content_input') ? ' is-invalid' : '' }}" name="content_input" value="{{ old('content_input') }}" required autofocus>

                                                @if ($errors->has('content_input'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content_input') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Material') }}</label>

                                            <div class="col-md-6">
                                                <input id="book_input" type="text" class="form-control{{ $errors->has('book_input') ? ' is-invalid' : '' }}" name="book_input" value="{{ old('book_input') }}" required autofocus>

                                                @if ($errors->has('book_input'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_input') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Salvar') }}
                                                </button>

                                            </div>
                                        </div>
                                        <br>

                                    </form>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <br>



            <div id="dvTabela" class="table-responsive">




                <table id='minhaTabela'>
                    <thead>

                    <tr>
                        <th style="text-align: center">Aula</th>
                        <th style="text-align: center">Data</th>
                        <th style="text-align: center">Conteúdo</th>
                        <th style="text-align: center">Material</th>
                        <th style="text-align: center">Avaliação da Aula</th>

                    <tr>
                    </thead>
                    <br>
                    <br>



                    <tbody id="tbody">
                    <?php $contador=1;
                    while($dados=$con1->fetch_array() ){?>
                    <tr>
                        <td> <?php echo $dados ['pro_lesson'];?><br><a href="/edit_progress/access_admin/{{$dados["pro_id"]}}/{{$rsv_id}}"> Editar </a></td>
                        <td> <?php echo $dados ['pro_data'];?></td>
                        <td> <?php echo $dados ['pro_content'];?></td>
                        <td> <?php echo $dados ['pro_book'];?></td>
                        <td>


                            <?php

                            if ($dados['pro_assessment'] != NULL){?>

                            <button type="button"  class="btn btn-xs btn-success" data-toggle="modal" data-target="#avaliada{{$contador}}">
                                <strong>AULA AVALIADA!</strong>
                            </button>


                            <div class="modal fade" id="avaliada{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">AULA AVALIADA !!</h4>

                                        </div>
                                        <div class="modal-body">

                                            <div class="estrelas">

                                                <?php $estrela=1;
                                                while($estrela<$dados['pro_assessment']){ ?>
                                                <label for="estrela_{{$estrela}}"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_{{$estrela}}" name="pro_assessment" value="{{$estrela}}" >

                                                <?php $estrela+=1;}?>


                                                <label for="estrela_{{$dados['pro_assessment']}}"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_{{$dados['pro_assessment']}}" name="pro_assessment" value="{{$dados['pro_assessment']}}" checked><br><br>

                                            </div>



                                            <div class="element-example">
                                                <div class="row">
                                                    <div class="col-md-13">
                                                        <div class="well well-lg">
                                                            <strong><h4>{{$dados['pro_comment']}}</h4></strong>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php }else { ?>

                            <strong style="color: darkgoldenrod">AINDA NÃO AVALIADA! </strong>




                            <?php }?>




                        </td>
                    </tr>
                    <?php $contador+=1;}?>
                    </tbody>


                </table>



                <script>


                    var tabela = document.getElementById("minhaTabela");
                    var linhas = tabela.getElementsByTagName("tr");

                    for(var i = 1; i < linhas.length; i++){
                        var linha = linhas[i];

                        linha.addEventListener("click", function(){
                            //Adicionar ao atual
                            selLinha(this, false); //Selecione apenas um
                            //selLinha(this, true); //Selecione quantos quiser
                        });
                    }

                    /**
                     Caso passe true, você pode selecionar multiplas linhas.
                     Caso passe false, você só pode selecionar uma linha por vez.
                     **/
                    function selLinha(linha, multiplos){
                        if(!multiplos){
                            var linhas = linha.parentElement.getElementsByTagName("tr");
                            for(var i = 0; i < linhas.length; i++){
                                var linha_ = linhas[i];
                                linha_.classList.remove("selecionado");
                            }
                        }
                        linha.classList.toggle("selecionado");
                    }


                </script>

            </div>

        </div>




        </body>


        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
        <script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>




        ////////////////////////////// TENTATIVA DE CRIAR UM ALTERAR SENHA /////////////////

        <span > <span aria-hidden="true"  class="ico-cog"  data-toggle="modal" data-target="#modalteste" title="ALTERAR SENHA"></span> </span>



        <div class="modal fa-sort" id="modalteste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="text-align: center" class="modal-title" id="exampleModalLabel">ALTERAR SENHA</h4>
                    </div>
                    <div  class="modal-body">

                        <form action="/reset-password-student" method="POST">

                            <div class="row">
                                <div class="form-group col-lg-6">

                                    <input type="password" placeholder="Senha atual..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="atual" value="{{ old('password') }}" required autofocus>


                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-lg-6">

                                    <input type="password"  placeholder="Nova senha..."  class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="nova" value="{{ old('password') }}" required>


                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-lg-6">

                                    <input type="password" placeholder="Confirma senha..." class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="confirm" value="{{ old('password   ') }}" required>


                                </div>


                            </div>




                        </form>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
