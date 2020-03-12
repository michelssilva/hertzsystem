<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $primaryKey = 'unt_id';
    protected $table = "units";
    protected $fillable=['unt_name','unt_number_classes'];

}
