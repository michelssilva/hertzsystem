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
    </style>

</head>

<body>
<div class="title">
    <h2> Relatório - Renda Total Unidade {{$unt_name}} </h2>
    <hr>
</div>

<div class="container">
    <div class="table-responsive">


        <?php $contador=1;

        while ($contador<=$unt_number_classes){  ?>
        <br>
         <?php $soma_das_commissoes=0;
               $soma_atribuicoes_escola=0; ?>

        <table id="tb_segunda">

            <thead>
            <tr>
                <th style="background-color: red; color: #fff"><strong>SALA {{$contador}}</strong></th>
                <th style="background-color: #4aa0e6; "><strong>Renda Total</strong></th>
                <th style="background-color: #4aa0e6; "><strong>Soma Comissão Professores</strong></th>
                <th style="background-color: #4aa0e6; "><strong>Atribuição à Escola</strong></th>
            </tr>
            </thead>
            <tbody>


            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>SEGUNDA-FEIRA</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='segunda-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='segunda-feira' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                        <?php }?>



                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='segunda-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>
            </tr>


















            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>TERÇA-FEIRA</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='terça-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='terça-feira' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='terça-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>










            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>QUARTA-FEIRA</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='quarta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='quarta-feira' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='quarta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>







            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>QUINTA-FEIRA</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='quinta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='quinta-feira' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='quinta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>





            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>SEXTA-FEIRA</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='sexta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='sexta-feira' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='sexta-feira';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>

















            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>SÁBADO</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='sabado';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='sabado' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='sabado';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>









            <tr>
                <td style="background-color: #b3b7bb">
                    <strong>DOMINGO</strong>
                </td>


                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='domingo';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']; ?>

                    <?php }?>

                    <?php }?>
                </td>

                <td >
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "select usr_name, usr_code_user, sum(rsv_payment)*usr_commission as total from users inner join reserves  where rsv_teacher_id=usr_id and rsv_week_day='domingo' and unt_id=$unt_id and rsv_class='$contador' group by usr_name;";
                    $con2=$conn->query($query1);

                    $soma_commissão_professores=0;

                    while($dados=$con2->fetch_array() ){
                        $soma_commissão_professores+=$dados['total'];

                    }?>


                    <?php if( $soma_commissão_professores!=null){ ?>


                    R$ <?php echo $soma_commissão_professores; ?>.00
                        <?php $soma_das_commissoes+=$soma_commissão_professores; ?>

                    <?php }?>


                </td>

                <td>

                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador' and rsv_week_day='domingo';";
                    $con1=$conn->query($query1);

                    while($dados=$con1->fetch_array() ){?>

                    <?php if($dados['total']!=null){ ?>

                    R$ <?php echo $dados ['total']-$soma_commissão_professores; ?>.00
                        <?php $soma_atribuicoes_escola+=($dados ['total']-$soma_commissão_professores); ?>

                    <?php }?>

                    <?php }?>
                </td>

            </tr>

            <tr>
                <td style="background-color: #fff; color: blue" >
                    <h4><?php if($soma_das_commissoes!=null){ ?>SOMA<?php }?></h4>
                </td>


                <td style="background-color: #fff; color: #1c7430">

                    <strong><h3> <?php
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $query1 = "SELECT sum(rsv_payment) as total from reserves where unt_id=$unt_id and rsv_class='$contador';";
                            $con1=$conn->query($query1);

                            while($dados=$con1->fetch_array() ){?>

                            <?php if($dados['total']!=null){ ?>

                            R$ <?php echo $dados ['total']; ?>

                            <?php }?>

                            <?php }?></h3></strong>

                </td>

                <td style="background-color: #fff; color: #1c7430">

                    <strong><h3>

                            <?php if($soma_das_commissoes!=null){ ?>

                            R$ <?php echo $soma_das_commissoes; ?>.00

                            <?php }?>

                         </h3></strong>

                </td>

                <td style="background-color: #fff; color: #1c7430">

                    <strong><h3>

                            <?php if($soma_atribuicoes_escola!=null){ ?>

                            R$ <?php echo $soma_atribuicoes_escola; ?>.00

                            <?php }?>
                                </h3></strong>


                </td>

            </tr>




        </table>
        <br>
        <br>


        <?php $contador +=1; } ?>



    </div>
</div>


</body>



</html>



