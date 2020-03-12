<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveType extends Model
{
    protected $primaryKey = 'rst_id';
    protected $table = "reserve_types";
    protected $fillable=['rst_name'];
}
