<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table ='courses';
    protected $primaryKey = 'crs_id';

    protected $fillable = [
        'crs_name','pay_id'
    ];

    public function payment(){
        return $this->hasOne('App\Payment');
    }
}
