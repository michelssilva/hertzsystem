<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $primaryKey = 'rle_id';
    protected $table = "roles";
    protected $fillable=['rle_name'];


}
