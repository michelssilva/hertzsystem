<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Progresso das Aulas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap-theme.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Andamento das Aulas</h2>
        </div><!--// .col-md-6 -->
    </div><!--// .row -->

    <div class="row">
        <div class="col-md-6">
            <table id="bookTable" class="table table-bordered table-condensed table-striped">
                <thead>
                <tr>
                    <th>Aula</th>
                    <th>Data</th>
                    <th>Conteudo</th>
                    <th>Material</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div><!--// .col-md-6 -->

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Nova Aula</div>
                <div class="panel-body">
                    <form id="book-form">
                        <div class="form-group">
                            <label for="lesson">Aula</label>
                            <input type="text" name="lesson" id="progress_lesson" class="form-control input-lg"
                                   placeholder="Ex: 1ª">
                        </div>


                        <div class="form-group">
                            <label for="date" >Data</label>
                            <div class="input-group datepicker">
                                <input type="text" name="date" class="form-control date-mask" id="progress_datepicker" placeholder="dd/mm/aaaa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content">Conteudo</label>
                            <input type="text" name="content" id="progress_content" class="form-control input-lg"
                                   placeholder="Ex: Triades Maiores">
                        </div>
                        <div class="form-group">
                            <label for="book">Material</label>
                            <input type="text" name="book" id="progress_book" class="form-control input-lg"
                                   placeholder="Ex: técnicas.pdf">
                        </div>

                        <div class="form-group">
                            <button type="submit" id="updateButton" class="btn btn-lg btn-primary">
                                Adicionar
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--// .panel -->
        </div><!--// .col-md -->
    </div><!--// .row -->
</div><!--// .container -->

<script type="text/html" id="bookTemplate">
    <tr>
        <td><%- lesson %></td>
        <td><%- date %></td>
        <td><%- content %></td>
        <td><%- book %></td>
        <td>
            <button type='button' class='book-edit btn btn-default' data-id='<%- id %>'>
                <span class='glyphicon glyphicon-edit'></span>
            </button>
        </td>
        <td>
            <button type='button' class='book-delete btn btn-default' data-id='<%- id %>'>
                <span class='glyphicon glyphicon-remove'></span>
            </button>
        </td>
    </tr>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/progress_form.js"></script>
<script src="js/book-table.js"></script>
<script src="js/progress_main.js"></script>
</body>
</html>
<script type="text/javascript">

    $( "#progress_datepicker" ).datepicker( );
    function booksAdd(){

        if ($("#bookTable tbody").length == 0){
            $("#bookTable").append("<tbody></tbody>");
        }

        // Adiciona um livro na tabela
        // $("#bookTable tbody").append(
        //     "<tr>" +
        //     "<td>Test-Driven Development - Teste e Design no Mundo Real com .NET</td>" +
        //     "<td>Mauricio Aniche</td>" +
        //     "<td>Casa do Código</td>" +
        //     "</tr>"
        // );
    }

    $(document).ready(function(){
        booksAdd();
    });

</script>