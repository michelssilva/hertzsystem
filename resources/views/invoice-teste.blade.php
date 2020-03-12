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
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório - Renda dos Professores e da Escola</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-grey">

  <div class="container container-smaller">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
        <div class="btn-group mb-4">
          <a href="/report_salary_teachers-pdf" class="btn btn-success">Salvar como PDF</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
          <div class="invoice">


            <div class="title">
              <h2> Relatório - Renda Líquida dos Professores e Escola </h2>
              <hr>
            </div>


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






        </div>
      </div>
    </div>

  </body>
</html>
