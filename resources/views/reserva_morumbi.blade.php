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
            background-color:#f7c6c5;
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
            border: 1.4px solid rgb(0101, 25, 25);
            padding: 7px;
            background-color: #fff;
        }


    </style>

</head>

<body>
<div class="title">
    <h1> UNIDADE MORUMBI</h1>
</div>
<nav class="nav_tabs">
    <ul>
        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
            <label for="tab1">SEGUNDA-FEIRA</label>
            <div class="content">
                <?php

                $conn = new mysqli($servername, $username, $password, $dbname);

                $query = "SELECT * FROM reservas_morumbi where dds_id=1 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
                    </tr>
                    <?php }?>
                </table>

            </div>
        </li>
        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab2">
            <label for="tab2">TERÇA-FEIRA</label>
            <div class="content">
                <?php


                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "SELECT * FROM reservas_morumbi where dds_id=2 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
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

                $query = "SELECT * FROM reservas_morumbi where dds_id=3 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
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

                $query = "SELECT * FROM reservas_morumbi where dds_id=4 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
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

                $query = "SELECT * FROM reservas_morumbi where dds_id=5 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
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

                $query = "SELECT * FROM reservas_morumbi where dds_id=6 ";
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
                        <th>Código</th>
                        <th>Horário</th>
                        <th>Professor</th>
                        <th>Instrumento</th>
                        <th>Tipo Reserva</th>
                        <th>Aluno</th>
                        <th>Sala</th>
                        <th>Mensalidade</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($dado=$con->fetch_array()){?>
                    <tr>
                        <td title="rsm_id" ><?php echo $dado["rsm_id"]?></td>
                        <td title="rsm_horario" class="editavel"><?php echo $dado["rsm_horario"]?></td>
                        <td title="rsm_professor" class="editavel"><?php echo $dado["rsm_professor"]?></td>
                        <td title="rsm_instrumento" class="editavel"><?php echo $dado["rsm_instrumento"]?></td>
                        <td title="rsm_tipo_reserva" class="editavel"><?php echo $dado["rsm_tipo_reserva"]?></td>
                        <td title="rsm_aluno" class="editavel"><?php echo $dado["rsm_aluno"]?></td>
                        <td title="rsm_sala" class="editavel"><?php echo $dado["rsm_sala"]?></td>
                        <td title="rsm_mensalidade" class="editavel"><?php echo $dado["rsm_mensalidade"]?></td>
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
        $('#tb_segunda tbody tr td.editavel').dblclick(function(){
            // if($('td>input').length > 0){
            //     return;
            // }
            var conteudoOriginal = $(this).text();
            var novoElemento= $('<input/>',{type: 'text', value: conteudoOriginal});
            $(this).html(novoElemento.blur(function(){
                var conteudoNovo = $(this).val();
                if(conteudoNovo != ""){
                    var objeto = $(this);
                    $.ajax({
                        type: "POST",
                        url: "alterar_reservas_morumbi.php",
                        data:{
                            id:$(this).parents('tr').children().first().text(),
                            campo: $(this).parent().attr('title'),
                            valor: conteudoNovo
                        },

                        success: function (result) {
                            objeto.parent().html(conteudoNovo);
                            $('body').append(result)
                        }

                    })
                }
            }))
            $(this).children().select()
        });
    })
</script>

</body>

</html>

