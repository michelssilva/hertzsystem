
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



        <!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Andamento das Aulas</title>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width,initial-scale=1'>
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

    {{--CSS PARA AVALIAÇÃO COM ESTRELAS--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css"   href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/css/bootstrap.css">
    <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/locastyle.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="http://opensource.locaweb.com.br/locawebstyle-v2/assets/stylesheets/manual.css" media="screen" rel="stylesheet" type="text/css" />
    <br>

</head>
<body >




<div class="title">
    <h1 style="font-family: Cambria;"> ANDAMENTO DAS AULAS </h1>
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

                            <form action="/new_lesson/{{$rsv_id}}" method="POST">
                                @csrf



                                <div class="form-group row">
                                    <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }} <strong style="color: red">*</strong></label>

                                    <div class="col-md-6">
                                        <input id="lesson_input" type="text" placeholder="Ex.: Aula 1" class="form-control{{ $errors->has('lesson_input') ? ' is-invalid' : '' }}" name="lesson_input" value="{{ old('lesson_input') }}" required autofocus>

                                        @if ($errors->has('lesson_input'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lesson_input') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="row date-range">
                                    <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Data') }} <strong style="color: red">*</strong></label>

                                    <div class="col-lg-5">
                                        <label for="example1" class="sr-only">Data</label>
                                        <div class="input-group datepicker">
                                            <input name="date_input" type="text" class="form-control date-mask to-date" placeholder="dd/mm/aaaa" required>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group row">
                                    <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Conteudo') }} <strong style="color: red">*</strong></label>

                                    <div class="col-md-6">
                                        <input id="content_input" type="text" placeholder="Ex.: Introdução da música..." class="form-control{{ $errors->has('content_input') ? ' is-invalid' : '' }}" name="content_input" value="{{ old('content_input') }}" required autofocus>

                                        @if ($errors->has('content_input'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content_input') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name02" class="col-md-4 col-form-label text-md-right">{{ __('Material (Opcional)') }} </label>

                                    <div class="col-md-6">
                                        <input id="book_input" type="text" class="form-control{{ $errors->has('book_input') ? ' is-invalid' : '' }}" name="book_input" value="{{ old('book_input') }}" autofocus>

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
                <th style="text-align: center; width: 70px">Aula</th>
                <th style="text-align: center">Data</th>
                <th style="text-align: center">Conteúdo</th>
                <th style="text-align: center">Link Material Google Drive (Opcional)</th>
                <th style="text-align: center">Avaliação da Aula</th>

            <tr>
            </thead>
            <br>
            <br>



            <tbody id="tbody">
            <?php $contador=1;
            while($dados=$con1->fetch_array() ){?>
            <tr>
                <td> <?php echo $dados ['pro_lesson'];?><br><a href="{{route('progress.edit', $dados["pro_id"]),$rsv_id}}"> Editar </a></td>
                <td> <?php echo $dados ['pro_data'];?></td>
                <td> <?php echo $dados ['pro_content'];?></td>
                <td> <a href="<?php echo $dados ['pro_book'];?>" target="_blank"><?php echo $dados ['pro_book'];?></a></td>
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
                                <div  class="modal-body">

                                    <div class="estrelas">

                                        <?php $estrela=1;
                                        while($estrela<$dados['pro_assessment']){ ?>
                                        <label for="estrela_{{$estrela}}"><i class="fa"></i></label>
                                        <input type="radio" id="estrela_{{$estrela}}" name="pro_assessment" value="{{$estrela}}" >&nbsp;&nbsp;&nbsp;&nbsp;

                                        <?php $estrela+=1;}?>


                                        <label for="estrela_{{$dados['pro_assessment']}}"><i class="fa"></i></label>
                                        <input type="radio" id="estrela_{{$dados['pro_assessment']}}" name="pro_assessment" value="{{$dados['pro_assessment']}}" checked><br><br>

                                    </div>



                                    <div style=" width:90%; margin:0 auto;" class="row">
                                        <div    class="col-md-16">
                                            <div  class="well well-lg">
                                                <strong><h4>{{$dados['pro_comment']}}</h4></strong>
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


<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/javascripts/locastyle.js" type="text/javascript"></script>
<script src="http://opensource.locaweb.com.br/locawebstyle-v2/assets/bootstrap/js/bootstrap.js"></script>

</body>
</html>
