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

        div.title{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            text-align: center;
        }

        table, td, th{
            border: 2.0px solid rgb(255,255,255);
            padding: 10px;
            margin: auto;
            background-color: #b0d4f1;
        }
        .table-responsive{
            width: 100%; !important;
        }


        .page-break {
            page-break-after: always;
        }
    </style>



</head>




<body>
<div class="title">
    <h2> Relatório - Renda Líquida dos Professores e Escola </h2>
    <hr>
</div>

<div class="container">
    <div class="table-responsive">



                <table >

    <thead>
    <tr>
        <th style="background-color: #4aa0e6; "><strong>PROFESSOR</strong></th>
        <th style="background-color: #4aa0e6; "><strong>CÓDIGO</strong></th>
        <th style="background-color: #4aa0e6; "><strong>RENDA MENSAL</strong></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves where rsv_teacher_id=usr_id group by usr_name;";
    $con1=$conn->query($query1);

    $soma_rendas_professores=0;

    while($dados=$con1->fetch_array() ){?>

    <tr>

        <td >

            <?php echo $dados['usr_name']; ?>

        </td>

        <td>
            <?php echo $dados['usr_code_user'];?>

        </td>


        <td >

            R$ <?php echo $dados['total']; ?>
            <?php $soma_rendas_professores+=$dados['total']; ?>

        </td>

    </tr>

    <?php ;} ?>

    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    $query1 = "select * from users where usr_role='professor' and usr_id not in(select rsv_teacher_id from reserves); ";
    $con1=$conn->query($query1);

    while($dados=$con1->fetch_array() ){?>

    <tr>

        <td >

            <?php echo $dados['usr_name']; ?>

        </td>

        <td>
            <?php echo $dados['usr_code_user'];?>

        </td>

        <td >

            -

        </td>

    </tr>

    <?php ;} ?>

    <tr>

        <td style="background-color: white; height: 50px">



        </td>

        <td style="background-color: white">


        </td>

        <td style="background-color: white">



        </td>

    </tr>

    <tr>

        <td style="background-color: white; height: 50px">



        </td>

        <td style="background-color: white">


        </td>

        <td style="background-color: white">


        </td>

    </tr>



    <tr>

        <td style="background-color: black; color: white; font-family: 'Comic Sans MS'" >

            Renda Bruta Mensal Escola

        </td>

        <td style="width: 100px; background: #f7ecb5; font-family: 'Nunito', sans-serif">

            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            $query1 = "select sum(rsv_payment) as total from reserves; ";
            $con1=$conn->query($query1);

            while($dados=$con1->fetch_array() ){?>

            <?php if($dados!=NULL){ ?>

            <strong >R$ <?php echo $dados['total']?></strong>

            <?php } ?>


            <?php }?>


        </td>

        <td style="background-color: white">


        </td>

    </tr>

    <tr>

        <td style="background-color: black; color: white; font-family: 'Comic Sans MS'" >

            Renda Líquida Mensal Escola

        </td>

        <td style="width: 100px; background: #5cd08d;font-family: 'Nunito', sans-serif">

            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            $query1 = "select sum(rsv_payment) as total from reserves; ";
            $con1=$conn->query($query1);

            while($dados=$con1->fetch_array() ){?>

            <?php if($dados!=NULL){ ?>

            <strong >R$ <?php echo $dados['total']-$soma_rendas_professores?>.00</strong>

            <?php } ?>


            <?php }?>


        </td>

        <td style="background-color: white">


        </td>

    </tr>





</table>
<br>
<br>



</div>


</div>

<div class="page-break"></div>
<div>another page</div>


</body>



</html>



