<?php

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>

<html>

<link href="{{ asset('assets/css/libs/bootstrap.min.css') }}" rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">--}}




<head>
    <title>RESERVAS {{$unt_name}} SALA {{$number_class}}</title>
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
            width: 1225px;
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
            width: 175px;
            padding: 3px;
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
            height: 590px;
            width: 1225px;
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
        <h2 style="color: #b91d19;"> <strong >UNIDADE {{$unt_name}} </strong> <strong style="color: black"> - </strong>   <strong style="color: darkblue">SALA {{$number_class}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and u.unt_id=r.unt_id;";
        $con1=$conn->query($query);

        ?>
        <?php while($dados=$con1->fetch_array() ){?>
            <?php if ($dados['total']!=0){?>
        <strong style="color: black">Renda Total: </strong>  <strong style="color: #1e7e34"> R$ <?php echo $dados["total"] ?></strong>
            <?php }else{ }?>

        <?php }?>
    </h2>

</div>





<nav class="nav_tabs">
    <ul>






        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
            <label for="tab1">SEGUNDA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='segunda-feira' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center"> {{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalSegunda-Feira{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalSegunda-Feira{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='SEGUNDA-FEIRA'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='segunda-feira' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>










        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab2">
            <label for="tab2">TERÇA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='terça-feira' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalTerça-Feira{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalTerça-Feira{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='TERÇA-FEIRA'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='terça-feira' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>





















        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab3">
            <label for="tab3">QUARTA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='quarta-feira' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalQuarta-Feira{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalQuarta-Feira{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='QUARTA-FEIRA'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='quarta-feira' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>















        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab4">
            <label for="tab4">QUINTA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='quinta-feira' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalQuinta-Feira{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalQuinta-Feira{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='QUINTA-FEIRA'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='quinta-feira' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>
















        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab5">
            <label for="tab5">SEXTA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='sexta-feira' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalSexta-Feira{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalSexta-Feira{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='SEXTA-FEIRA'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='sexta-feira' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>
















        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab6">
            <label for="tab6">SÁBADO</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='sabado' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalSabado{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalSabado{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='SABADO'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='sabado' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>














        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab7">
            <label for="tab7">DOMINGO</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "select distinct rsv_start_time,rsv_end_time,usr_name, usr_code_user from reserves inner join users
                          where unt_id='$unt_id' and rsv_class='$number_class' and rsv_week_day='domingo' and rsv_teacher_id=usr_id and usr_role = 'professor'
                          order by rsv_start_time, rsv_end_time asc; ";
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
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Inicial</th>
                        <th  style="background-color: #b9bbbe; text-align: center">Hora Final</th>
                        <th style="background-color: #b9bbbe; text-align: center">Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center">Código Professor</th>
                        <th style="background-color: #b9bbbe; text-align: center    ">Alunos</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=1;
                    while($dado=$con->fetch_array()){?>
                    <tr>
                        <td  style="background-color: #f9d6d5; text-align: center"> <?php echo $dado["rsv_start_time"]?> </td>
                        <td  style="background-color: #f9d6d5; text-align: center" ><?php echo $dado["rsv_end_time"]?></td>
                        <td  style="text-align: center">{{explode(' ', $dado["usr_name"])[0]}}</td>
                        <td  style="text-align: center"><?php echo $dado["usr_code_user"]?></td>
                        <td style="text-align: center">

                            <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalDomingo{{$contador}}">
                                CONSULTAR
                            </button>



                            <div class="modal fade" id="modalDomingo{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Alunos deste horário</h4>

                                        </div>
                                        <div class="modal-body">

                                            <?php

                                            $rsv_start_time= $dado ["rsv_start_time"] ;     $rsv_end_time= $dado ["rsv_end_time"];

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            $query = "select  rsv.rsv_id, usr.usr_name, usr.usr_code_user, rst.rst_name, crs.crs_name, rsv.rsv_payment
                                                              from reserves rsv inner join reserve_types rst inner join units unt inner join courses crs inner join users usr
                                                              where rsv.rsv_start_time='$rsv_start_time'
                                                              and   rsv.rsv_end_time = '$rsv_end_time'
                                                              and   rsv.rsv_week_day='DOMINGO'
                                                              and   unt.unt_name='$unt_name'
                                                              and   rsv.rsv_class='$number_class'
                                                              and   rsv.rst_id=rst.rst_id
                                                              and   rsv.unt_id=unt.unt_id
                                                              and   rsv.crs_id=crs.crs_id
                                                              and   rsv.rsv_student_id=usr.usr_id
                                                              and   usr.usr_role='aluno' order by usr.usr_name;";
                                            $con1=$conn->query($query);

                                            ?>


                                            <table id='minhaTabela'>
                                                <thead>

                                                <tr>
                                                    <th style="background-color: #b9bbbe; text-align: center">Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Código Aluno</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Curso</th>
                                                    <th style="background-color: #b9bbbe; text-align: center">Mensalidade</th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Ação </th>
                                                    <th style="background-color: #b9bbbe; text-align: center"> Andamento </th>
                                                <tr>
                                                </thead>


                                                <tbody id="tbody" style="font-family: Arial">
                                                <?php while($dados=$con1->fetch_array() ){?>
                                                <tr>
                                                    <td style="font-family: Arial; text-align: center; background-color: #a6e1ec">{{explode(' ', $dados["usr_name"])[0]}}</td>
                                                    <td style="font-family: Arial; text-align: center"><?php echo $dados ["usr_code_user"];?></td>
                                                    <td style="font-family: Arial;text-align: center "><button data-container="body" data-toggle="popover" data-placement="top" class="btn btn-default" data-content="<?php echo $dados ["rst_name"];?>"><?php echo $dados ["crs_name"];?></button></td>
                                                    <td style="font-family: Arial; background-color: #b3e8ca; color: #0b2e13; text-align: center">

                                                        <?php if($dados['rsv_payment']!= NULL){?>

                                                        <strong>R$ <?php echo $dados ["rsv_payment"];?></strong>
                                                        <?php }else{ ?>
                                                        -
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="{{route('reserves.show', $dados["rsv_id"])}}"  target="_blank"><button class="btn btn-xs btn-default" style="color: black"  ><strong>Editar</strong></button></a></td>
                                                    <td style="text-align: center">
                                                        <?php
                                                        $connn = new mysqli($servername, $username, $password, $dbname);
                                                        $rsv_id=$dados["rsv_id"];

                                                        $queryy = "select * from progress p inner join reserves r where p.rsv_id=$rsv_id;";
                                                        $con3=$connn->query($queryy);

                                                        ?>

                                                        <?php if($con3->num_rows==0){?>

                                                        <a href="/create_progress/my_student/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-danger" ><strong>Criar</strong></button></a>

                                                        <?php }else{ ?>
                                                        <a href="/content/admin_access/{{$rsv_id}}"  target="_blank"><button class="btn btn-xs btn-success" ><strong>Consultar</strong></button></a>
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

                        <?php $contador+=1; }?>
                    </tr>
                    <tr>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: black"></td>
                        <td style="background: yellow; color: black; text-align: center;" ><strong>TOTAL</strong></td>
                        <td style="background: #5cd08d; color: #0b2e13; text-align: center " ><strong> <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $query = "select sum(rsv_payment) as total from reserves r inner join units u where unt_name='$unt_name' and rsv_class=$number_class and rsv_week_day='domingo' and u.unt_id=r.unt_id;";
                                $con1=$conn->query($query);

                                ?>

                                <?php while($dados=$con1->fetch_array() ){?>
                                <?php if($dados['total']!= NULL){?>
                                R$ <?php echo $dados["total"] ?>
                                <?php }else{?>
                                -
                                <?php }?>
                                <?php }?></strong></td>

                    </tr>

                </table>



            </div>
        </li>




    </ul>
</nav>

{{--<script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}

{{--<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>--}}

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
{{--<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>--}}



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

