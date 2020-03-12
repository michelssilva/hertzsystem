<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 10/03/2019
 * Time: 00:08
 */
?>

<html>

<head>
    <meta charset="utf8">
    <title>Reservas Centro</title>
    <style>
        body{font-family:Calibri, Tahoma, Arial}
        .TabControl{ width:100%; overflow:hidden; height:615px}
        .TabControl #header{ width:100%; border: solid 1px; overflow:hidden; cursor:hand}
        .TabControl #content{ width:100%; border: solid 1px;overflow:hidden; height:100%; }
        .TabControl .abas{display:inline;}
        .TabControl .abas li{float:left}
        .aba{width:100px; height:30px; border:solid 1px; border-radius:5px 5px 0 0;
            text-align:center; padding-top:5px; background:lightgrey}
        .ativa{width:100px; height:30px; border:solid 1 px; border-radius:5px 5px 0 0;
            text-align:center; padding-top:5px; background:lightgrey;}
        .ativa span, .selected span{color:#fff}
        .TabControl #content{background:lightgrey}
        .TabControl .conteudo{width:100%;  background:lightgrey; display:none; height:100%;color:#fff}
        .selected{width:100px; height:30px; border:solid 1 px; border-radius:5px 5px 0 0;
            text-align:center; padding-top:5px; background:grey}
    </style>
</head>
<body>

{{--<div class="title">--}}
    {{--<h1> UNIDADE CENTRO</h1>--}}
{{--</div>--}}
{{--<h2> SEGUNDA-FEIRA </h2>--}}

<div class="TabControl">
    <div id="header">
        <ul class="abas">
            <li>
                <div class="aba">
                    <span>Cadastrar</span>
                </div>
            </li>
            <li>
                <div class="aba">
                    <span>Meus Horários</span>
                </div>
            </li>
            <li>
                <div class="aba">
                    <span>Reservar Aula</span>
                </div>
            </li>
            <li>
                <div class="aba">
                    <span>Cadastro</span>
                </div>
            </li>
        </ul>
    </div>
    <div id="content">
        <div class="conteudo">
            Conteúdo da aba 1
        </div>
        <div class="conteudo">
            Conteúdo da aba 2
        </div>
        <div class="conteudo">
            Conteúdo da aba 3
        </div>
        <div class="conteudo">
            Conteúdo da aba 4
        </div>
    </div>
</div>

<script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){
             $("#content div:nth-child(1)").show();
              $(".abas li:first div").addClass("selected");
              $(".aba").click(function(){
                      $(".aba").removeClass("selected");
                      $(this).addClass("selected");
                      var indice = $(this).parent().index();
                      indice++;
                      $("#content div").hide();
                      $("#content div:nth-child("+indice+")").show();
                 });

              $(".aba").hover(
                     function(){$(this).addClass("ativa")},
                  function(){$(this).removeClass("ativa")}
             );
          });

    $(elemento).hover(
        function(){/*função a ser executada ao pôr o cursor sobre o elemento*/},
        function(){/*função a ser executada ao tirar o cursor do elemento*/}
    );

</script>


</body>

</html>
