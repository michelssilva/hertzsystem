<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected  $table ='payments';
    protected $primaryKey = 'pay_id';
    protected $fillable = ['pay_value'];
}
