<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = [

        'tcr_name',
        'tcr_cell_phone',
        'tcr_telephone',
        'tcr_cpf',
        'tcr_email',
        'tcr_password',
        'tcr_address',
        'tcr_number',
        'tcr_neighborhood',
        'tcr_zip_code'
    ];


}
