<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel_cms";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM reserva; ";
$con=$conn->query($query); // Armazenei separadamente o comando SQL em uma variavel;

if ($conn->multi_query($query) === TRUE) {
//    echo "\n\nExecução SQL com sucesso!";    JÁ TESTEI E SEI ESTÁ RODANDO COMANDO SQL COM SUCESSO.
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$conn->close();

?>

<html>

    <head>
        <meta charset="utf8">
        <title>Reservas</title>
        <style>
            table{
                border-collapse: collapse
            }
            table, td, th{
                border: 1px solid rgb(163, 25, 25);
                padding: 5px;
            }
        </style>
    </head>
    <body>
    <h1>SEGUNDA-FEIRA</h1>
    <table id="tb_segunda">
        <thead>
        <tr>
            <th>Código</th>
            <th>Horário</th>
            <th>Professor</th>
            <th>Instrumento</th>
            <th>Tipo Reserva</th>
            <th>Aluno</th>
            <th>Cod Aluno</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>

        <?php while($dado=$con->fetch_array()){?>
        <tr>
            <td title="id" class="editavel"><?php echo $dado["id"]?></td>
            <td title="horario" class="editavel"><?php echo $dado["horario"]?></td>
            <td title="professor" class="editavel"><?php echo $dado["professor"]?></td>
            <td title="instrumento" class="editavel"><?php echo $dado["instrumento"]?></td>
            <td title="tipo_reserva" class="editavel"><?php echo $dado["tipo_reserva"]?></td>
            <td title="aluno" class="editavel"><?php echo $dado["aluno"]?></td>
            <td><?php echo $dado["cod_aluno"]?></td>
            <td title="valor" class="editavel"><?php echo $dado["valor"]?></td>
        </tr>
        <?php }?>
    </table>

    <script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>


        $(document).ready(function(){
            $('#tb_segunda tbody tr td.editavel').dblclick(function(){
                // if($('td>input').length > 0){
                //     return;
                // }
                var conteudoOriginal = $(this).text();
                var novoElemento= $('<input/>',{type: 'text', value: conteudoOriginal})
                $(this).html(novoElemento.blur(function(){
                    var conteudoNovo = $(this).val()
                    if(conteudoNovo != ""){
                        var objeto = $(this)
                        $.ajax({
                            type: "POST",
                            url: "alterarrrrrr.php",
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