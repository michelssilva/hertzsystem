<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'rom_id';

    protected $fillable = [
        'unt_name',
    ];
}
