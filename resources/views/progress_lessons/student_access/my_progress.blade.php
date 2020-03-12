
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

$query = "SELECT * from progress where rsv_id=$rsv_id order by pro_id desc ;";
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
            width:97%;
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

<body>

<div class="title">
    <h1 style="font-family: Cambria;"> ANDAMENTO DAS AULAS </h1>
    <hr>
</div>


<div class="container">

    {{--CSS PARA AVALIAÇÃO COM ESTRELAS--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css">

    <div id="dvTabela" class="table-responsive">


        <table id='minhaTabela'>
            <thead>

            <tr>
                <th style="text-align: center">Aula</th>
                <th style="text-align: center">Data</th>
                <th style="text-align: center">Conteúdo</th>
                <th style="text-align: center">Material</th>
                <th style="text-align: center">Avaliar Aula</th>

            <tr>
            </thead>



            <tbody id="tbody">
            <?php $contador=1;
            while($dados=$con1->fetch_array() ){?>
            <tr>
                <td> <?php echo $dados ['pro_lesson'];?></td>
                <td> <?php echo $dados ['pro_data'];?></td>
                <td> <?php echo $dados ['pro_content'];?></td>
                <td><a href="<?php echo $dados ['pro_book'];?>" target="_blank"><?php echo $dados ['pro_book'];?></td>
                <td>

                    <?php

                    if ($dados['pro_assessment'] == NULL  AND $dados['pro_comment'] == NULL){?>

                        <button type="button"  class="btn btn-xs btn-info" data-toggle="modal" data-target="#avaliação{{$contador}}">
                           <strong>AVALIAR AULA</strong>
                        </button>


                        <div class="modal fade" id="avaliação{{$contador}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">AVALIE ESSA AULA</h4>

                                    </div>
                                    <div class="modal-body">

                                        <form method="GET" action="/assessment_lesson/{{$dados['pro_id']}}/{{$rsv_id}}" enctype="multipart/form-data">
                                            <div class="estrelas">

                                                <label for="estrela_um"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_um" name="pro_assessment" value="1" checked >

                                                <label for="estrela_dois"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_dois" name="pro_assessment" value="2" >

                                                <label for="estrela_tres"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_tres" name="pro_assessment" value="3" >

                                                <label for="estrela_quatro"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_quatro" name="pro_assessment" value="4" >

                                                <label for="estrela_cinco"><i class="fa"></i></label>
                                                <input type="radio" id="estrela_cinco" name="pro_assessment" value="5" ><br><br>

                                                <input type="text" class="input" placeholder="Insira um comentário..." name="pro_comment" required><br><br>

                                                <input type="submit" class="btn btn-info" value="Avaliar">

                                            </div>
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php }else { ?>

                        <strong style="color: darkgreen">AVALIADA! </strong>




                        <?php }?>




                </td>
            </tr>
            <?php $contador+=1; }?>
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
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>


