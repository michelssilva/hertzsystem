<h2> Redefinir Senha</h2>
<h2>{{$user->usr_email}}</h2>

<form action="{{url('/reset_password/'.$user->usr_email.'/'.$code)}}">

    {{csrf_field()}}

    Digite uma senha: <br>
    <input type="password" name="password" id="password">

    <br><br>
    
    Confirme a senha: <br>
    <input type="password" name="password_confirmation" id="password_confirmation">

    <br><br>

    <button type="submit"> Redefinir Senha</button>


</form>