<?php

namespace App\Http\Controllers\Security;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class ForgotPassword extends Controller
{


    //USANDO ATUALMENTE
    public function forgot(){
//        return view('security.forgot');

        return view('security.forgot_personalizado_email');
//        return view('auth.passwords.email');


    }



    //USANDO ATUALMENTE
    public function password(Request $request){

//        dd($request->all());
        $user = Users::where('usr_email',$request->email)->first();

        if($user == null){
            return redirect()->back()->with(['error' => 'Esse e-mail não está cadastrado no sistema !']);
        }

//        $user = U::findById($user->usr_id);
//        $reminder = Reminder::exists($user) ? : Reminder::create($user);

        $this->sendEmail($user, $user->remember_token);

        return redirect()->back()->with('success', 'Link de redefinição de senha enviado com sucesso !');

    }


    //USANDO ATUALMENTE
    public function sendEmail($user, $code ){
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function ($message) use ($user){
                $message->from('hertzsystemsjc@gmail.com','Hertz Music School');
                $message->to($user->usr_email);
                $message->subject("$user->usr_name, redefina sua senha de acesso ao System Hertz. ");
            }
        );
    }





    //USANDO ATUALMENTE
    public function reset($email, $code){

        $user = Users::where('usr_email',$email)->first();

        if($user == null){
            return 'E-mail inexistente na base de dados!!';
        }else{
//            return view('security.reset_password_form')->with(['user'=>$user, 'code' => $code]);
            return view('security.reset_password_form_teste')->with(['user'=>$user, 'code' => $code]);
        }

    }





    public function resetPassword(Request $request, $email, $code){


        $user = Users::where('usr_email',$email)->first();
        if($user == null){
            return 'E-mail inexistente na base de dados!!';
        }

        $user->usr_password = Hash::make($request->password);
        $user->save();
        return redirect('/login')->with('success', 'Senha redefinida com sucesso!!');
    }




    //USANDO ATUALMENTE

    public function resetPasswordTest(Request $request){

        $dados = $request->all();
        $user = Users::where('usr_email', $dados['email'])
            ->first();


        if($user == null){
            return redirect()->back()->with(['error' => 'E-mail inexistente na base de dados!!']);
        }


        if($dados['password']==$dados['password_confirmation']){
            $user->usr_password = Hash::make($dados['password']);
            $user->save();
            return redirect('/login')->with('success','Senha redefinida com sucesso !!');
        }else{
            return redirect()->back()->with(['error' => 'SENHAS NÃO ESTÃO IGUAIS!']);
        };


    }




}
