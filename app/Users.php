<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
use App\Notifications\meuResetDeSenha;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{

   // use Notifiable;

    protected $hidden = ['usr_password', 'remember_token'];
    protected $primaryKey = 'usr_id';
    protected $table = "users";


    protected $fillable = [
        'usr_name',
        'usr_email',
        'usr_password',
        'usr_role',
        'usr_cpf',
        'usr_cell_phone',
        'usr_telephone',
        'usr_state',
        'usr_city',
        'usr_address',
        'usr_number',
        'usr_neighborhood',
        'usr_zip_code',
        'usr_code_user',
        'usr_commission'
    ];
//
//    public function getTitle(): string {
//        retu "Classe de Usuarios";
//    }




//    public function getPasswordAttribute()
//    {
//        return $this->usr_password;
//    }
//
//    public function getEmailForPasswordReset() {
//    return $this->usr_email;
//}
//
//
//    public function getEmailAttribute()
//    {
//        return $this->attributes["hertzsystemsjc@gmail.com"];
//    }

    public function isAdmin(){

        if($this->usr_role == 'Administrador'){
            return true;
        }return false;

    }

    public function isTeacher(){

        if($this->usr_role == 'Professor'){
            return true;
        }return false;

    }

    public function isStudent(){

        if($this->usr_role == 'Aluno'){
            return true;

        }return false;

    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new meuResetDeSenha($token));
    }








}
