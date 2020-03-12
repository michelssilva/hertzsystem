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
        /*#minhaTabela tr:hover td{*/
        /*background-color: #feffb7;*/
        /*}*/

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
        #txtBusca2{
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
        <div >Bem vindo aluno(a) {{explode(' ', Auth::user()->usr_name)[0]}} ao <strong>Hertz System</strong> !     </div>


        <hr>
        <div class="element-example">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#my_times" data-toggle="tab">Meus Horários</a></li>
            </ul>


            <div class="tab-content">

                <div class="tab-pane active in" id="my_times">

                    <?php



                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $usr_id=Auth::user()->usr_id;

                    //                    $query = "select rsv_week_day, rsv_start_time, rsv_end_time rsv_students, rsv_instrument,rsv_unit, rsv_class from reserves
                    //                    where rsv_teacher_code='$teacher_code';";
                    $query = "select rsv_id, unt_name, r.unt_id, rsv_class, rsv_week_day, rsv_start_time, rsv_end_time, usr_name, rst_name, crs_name from reserves r
inner join units u inner join courses c inner join users usr inner join reserve_types rt where rt.rst_id=r.rst_id and usr_id=rsv_teacher_id and r.crs_id=c.crs_id and r.unt_id=u.unt_id and rsv_student_id=$usr_id;";
                    $con1=$conn->query($query);

                    ?>



                    <div id="dvTabela" class="table-responsive">



                        <table id='minhaTabela'>
                            <thead>

                            <tr>
                                <th style="text-align: center">Unidade</th>
                                <th style="text-align: center">Sala</th>
                                <th style="text-align: center">Dia da Semana</th>
                                <th style="text-align: center">Hora Inicial</th>
                                <th style="text-align: center">Hora Final</th>
                                <th style="text-align: center">Professor</th>
                                <th style="text-align: center">Curso</th>
                                <th style="text-align: center">Tipo Reserva</th>
                                <th style="text-align: center">Mensalidade</th>
                                <th style="text-align: center">Andamento</th>


                            <tr>
                            </thead>


                            <tbody id="tbody2">
                            <?php
                            $contador=1;
                            while($dados=$con1->fetch_array() ){?>
                            <tr>
                                <td> <?php echo $dados ["unt_name"];?> </td>
                                <td> SALA <?php echo $dados ["rsv_class"];?> </td>
                                <td> <?php echo $dados ["rsv_week_day"];?></td>
                                <td> <?php echo $dados ["rsv_start_time"];?></td>
                                <td> <?php echo $dados ["rsv_end_time"];?></td>
                                <td> <?php echo $dados ["usr_name"];?></td>
                                <td> <?php echo $dados ["crs_name"];?></td>
                                <td> <?php echo $dados ["rst_name"];?></td>
                                <td>

                                    <?php
                                    $conn3 = new mysqli($servername, $username, $password, $dbname);

                                    $unt_name=$dados['unt_name'];
                                    $rsv_class=$dados['rsv_class'];
                                    $rsv_week_day=$dados['rsv_week_day'];
                                    $rsv_start_time=$dados['rsv_start_time'];
                                    $rsv_end_time=$dados['rsv_end_time'];

                                    $query3 = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$rsv_class and rsv_week_day='$rsv_week_day' and rsv_start_time='$rsv_start_time' and rsv_end_time='$rsv_end_time'  and rsv_student_id=$usr_id;";
                                    $con3=$conn3->query($query3);

                                    ?>

                                    <?php while($dados3=$con3->fetch_array() ){?>
                                    <?php if($dados3['total']!= NULL){?>
                                    R$ <?php echo $dados3["total"] ?>
                                    <?php }else{?>
                                    -
                                    <?php }?>
                                    <?php }?></td>
                                <td>

                                    <?php
                                    $connn = new mysqli($servername, $username, $password, $dbname);
                                    $rsv_id=$dados["rsv_id"];

                                    $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                    $con3=$connn->query($queryy);

                                    ?>

                                    <?php if($con3->num_rows==0){?>

                                    -

                                    <?php }else{ ?>
                                    <a href="/my_progress/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
                                    <?php }?>




                                </td>


                            </tr>
                            <?php $contador+=1; }?>
                            <tr>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: #2e6da4"></td>
                                <td style="background: yellow"><strong><h4>Total</h4></strong></td>
                                <td style="background: #5cd08d; color: #1c7430">
                                    <strong><h4><?php
                                            $conn4 = new mysqli($servername, $username, $password, $dbname);

                                            $query4 = "select sum(rsv_payment) as total from reserves where rsv_student_id=$usr_id;";
                                            $con4=$conn4->query($query4);

                                            ?>

                                            <?php while($dados4=$con4->fetch_array() ){?>
                                            <?php if($dados4['total']!= NULL){?>
                                            R$ <?php echo $dados4["total"] ?>
                                            <?php }else{?>
                                            -
                                            <?php }?>
                                            <?php }?></h4></strong>

                                </td>
                                <td style="background: #2e6da4"></td>



                            </tr>
                            </tbody>


                        </table>



                        <script>


                            // var tabela = document.getElementById("minhaTabela");
                            // var linhas = tabela.getElementsByTagName("tr");
                            //
                            // for(var i = 1; i < linhas.length; i++){
                            //     var linha = linhas[i];
                            //
                            //     linha.addEventListener("click", function(){
                            //         //Adicionar ao atual
                            //         selLinha(this, false); //Selecione apenas um
                            //         //selLinha(this, true); //Selecione quantos quiser
                            //     });
                            // }
                            //
                            // /**
                            //  Caso passe true, você pode selecionar multiplas linhas.
                            //  Caso passe false, você só pode selecionar uma linha por vez.
                            //  **/
                            // function selLinha(linha, multiplos){
                            //     if(!multiplos){
                            //         var linhas = linha.parentElement.getElementsByTagName("tr");
                            //         for(var i = 0; i < linhas.length; i++){
                            //             var linha_ = linhas[i];
                            //             linha_.classList.remove("selecionado");
                            //         }
                            //     }
                            //     linha.classList.toggle("selecionado");
                            // }
                        </script>

                    </div>
                </div>









            </div>
        </div>



    </div>
</main>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
