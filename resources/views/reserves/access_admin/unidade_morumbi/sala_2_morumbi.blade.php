<?php

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>

<html>
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
    <h2> UNIDADE MORUMBI - SALA 2</h2>
</div>
<nav class="nav_tabs">
    <ul>
        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
            <label for="tab1">SEGUNDA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='segunda-feira'; ";

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
                                <th style="background-color: black">Registro</th>
                                <th style="background-color: #b9bbbe">Horário</th>
                                <th style="background-color: #b9bbbe">Professor</th>
                                <th style="background-color: #b9bbbe">Instrumento</th>
                                <th style="background-color: #b9bbbe">Aluno(s)</th>
                                <th style="background-color: #b9bbbe">Mensalidade</th>
                                <th style="background-color: #b9bbbe">Códigos</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php while($dado=$con->fetch_array()){?>
                            <tr>
                                <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                                <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                                <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                                <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                                <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                                <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                                <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
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
                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='terca-feira'; ";
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
                        <th style="background-color: black">Registro</th>
                        <th style="background-color: #b9bbbe">Horário</th>
                        <th style="background-color: #b9bbbe">Professor</th>
                        <th style="background-color: #b9bbbe">Instrumento</th>
                        <th style="background-color: #b9bbbe">Aluno(s)</th>
                        <th style="background-color: #b9bbbe">Mensalidade</th>
                        <th style="background-color: #b9bbbe">Códigos</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                        <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                        <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                        <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                        <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                        <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                        <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
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

                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='quarta-feira'; ";
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
                        <th style="background-color: black">Registro</th>
                        <th style="background-color: #b9bbbe">Horário</th>
                        <th style="background-color: #b9bbbe">Professor</th>
                        <th style="background-color: #b9bbbe">Instrumento</th>
                        <th style="background-color: #b9bbbe">Aluno(s)</th>
                        <th style="background-color: #b9bbbe">Mensalidade</th>
                        <th style="background-color: #b9bbbe">Códigos</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                        <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                        <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                        <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                        <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                        <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                        <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
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

                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='quinta-feira'; ";
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
                        <th style="background-color: black">Registro</th>
                        <th style="background-color: #b9bbbe">Horário</th>
                        <th style="background-color: #b9bbbe">Professor</th>
                        <th style="background-color: #b9bbbe">Instrumento</th>
                        <th style="background-color: #b9bbbe">Aluno(s)</th>
                        <th style="background-color: #b9bbbe">Mensalidade</th>
                        <th style="background-color: #b9bbbe">Códigos</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                        <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                        <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                        <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                        <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                        <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                        <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
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

                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='sexta-feira'; ";
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
                        <th style="background-color: black">Registro</th>
                        <th style="background-color: #b9bbbe">Horário</th>
                        <th style="background-color: #b9bbbe">Professor</th>
                        <th style="background-color: #b9bbbe">Instrumento</th>
                        <th style="background-color: #b9bbbe">Aluno(s)</th>
                        <th style="background-color: #b9bbbe">Mensalidade</th>
                        <th style="background-color: #b9bbbe">Códigos</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                        <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                        <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                        <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                        <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                        <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                        <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
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
                $query = "select * from reserves where rsv_unit='morumbi' and rsv_class='sala 2' and rsv_week_day='sabado'; ";
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
                        <th style="background-color: black">Registro</th>
                        <th style="background-color: #b9bbbe">Horário</th>
                        <th style="background-color: #b9bbbe">Professor</th>
                        <th style="background-color: #b9bbbe">Instrumento</th>
                        <th style="background-color: #b9bbbe">Aluno(s)</th>
                        <th style="background-color: #b9bbbe">Mensalidade</th>
                        <th style="background-color: #b9bbbe">Códigos</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsv_id" style="background-color: black "><?php echo $dado["rsv_id"]?></td>
                        <td title="rsv_time" class="editavel" style="background-color: #f9d6d5"><?php echo $dado["rsv_time"]?></td>
                        <td title="rsv_teacher" class="editavel"><?php echo $dado["rsv_teacher"]?></td>
                        <td title="rsv_instrument" class="editavel"><?php echo $dado["rsv_instrument"]?></td>
                        <td title="rsv_students" class="editavel"><?php echo $dado["rsv_students"]?></td>
                        <td title="rsv_payment" class="editavel" style="background-color: #c7eed8; ">R$ <?php echo $dado["rsv_payment"]?>,00</td>
                        <td style="background-color: #a6e1ec;"><a href="{{route('reserves.show', $dado["rsv_id"])}}" target="_blank"> Editar</a></td>
                    </tr>
                    <?php }?>
                </table>



            </div>
        </li>

    </ul>
</nav>

<script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){
        $('#tb_segunda tbody tr td.editavel').click(function(){
            // if($('td>input').length > 0){
            //     return;
            // }
            var conteudoOriginal = $(this).text();
            var novoElemento= $('<input/>',{type: 'text', value: conteudoOriginal});
            $(this).html(novoElemento.bind('blur keydown', function(e) {
                var keyCode = e.which;
                if (keyCode == 13){
                    var conteudoNovo = $(this).val();
                    if (conteudoNovo != "") {
                        var objeto = $(this);
                        $.ajax({
                            type: "POST",
                            url: "alterar_reservas.php",
                            data: {
                                id: $(this).parents('tr').children().first().text(),
                                campo: $(this).parent().attr('title'),
                                valor: conteudoNovo
                            },

                            success: function (result) {
                                objeto.parent().html(conteudoNovo);
                                $('body').append(result)
                            }

                        })
                    }

                }if(e.type == "blur"){
                    $(this).parent().html(conteudoOriginal);
                }
            }))
            $(this).children().select()
        });
    })
</script>

</body>

</html>

