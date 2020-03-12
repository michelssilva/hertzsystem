<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   // protected $primaryKey=['usr_id'];



    protected $fillable = [
        'name', 'email', 'password','role','cpf','cell_phone','telephone','address','number','neighborhood','zip_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function post(){
        return $this->hasOne('App\Post');
    }

        public function posts(){
            return $this->hasMany('App\Post');
        }

//        public function getNameAttribute($value){
//
//            return strtoupper($value);
//
//        }
//
//        public function setNameAttribute($value){
//
//            $this->attributes['name'] = strtoupper($value);
//
//        }



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

        





}
    