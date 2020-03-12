
{{--<div>--}}


{{--<ul>--}}



{{--<li><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></li>--}}




{{--</ul>--}}

{{--</div>--}}
<?php

use Illuminate\Support\Facades\Auth;$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel_cms";

$conn = new mysqli($servername, $username, $password, $dbname);
$id_user_logged=Auth::user()->id;
$query = "SELECT * from users where teacher_id=$id_user_logged";
$con1=$conn->query($query);



?>


<head>
    <title>Cadastros Alunos</title>
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

<div class="title">
    <h1> Consultar Cadastro Alunos </h1>
    <hr>
</div>

<div class="container">

    <div id="dvTabela" class="table-responsive">



        <input type="text" id='txtBusca' placeholder="Buscar aluno por nome, função, email, cpf..." class="  input"/>

        <table id='minhaTabela'>
            <thead>

            <tr>
                <th>Nome</th>
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


            <tbody id="tbody"><?php while($dados=$con1->fetch_array() ){?><tr><td><?php echo $dados ["name"];?><br><a href="{{route('students.show', $dados["id"])}}"> Editar Cadastro </a></td><td> <?php echo $dados ["email"];?> </td><td> <?php echo $dados ["cpf"];?></td><td> <?php echo $dados ["cell_phone"];?></td><td> <?php echo $dados ["telephone"];?></td><td> <?php echo $dados ["address"];?></td><td> <?php echo $dados ["number"];?></td><td> <?php echo $dados ["neighborhood"];?></td><td> <?php echo $dados ["zip_code"];?></td></tr><?php }?></tbody>


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




</body>


