


<h2>Olá {{$user->usr_name}}</h2>

<p>
    Por favor clique no botão para redefinir sua senha de acesso ao <strong>System Hertz.</strong>
    <br> <br>


    <a href="{{ url('reset_password/'.$user->usr_email.'/'.$code)}}">Redefinir Senha</a>

    <br><br>


    Não responda este e-mail. Essa mensagem é automática !

</p>