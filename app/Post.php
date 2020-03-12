<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{


    public $directory='/images';

    use SoftDeletes;

    //
//    protected $table = 'posts';
//
//    protected  $primaryKey = 'post_id';

    protected $dates =['deleted_at'];

    protected $fillable = ['title','content','user_id','path'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getPathAttribute($value){

        return $this->directory . $value;

    }







}
