<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //

    protected $table = 'reserves';
    protected $primaryKey = 'rsv_id';

    protected $fillable = [
        'rsv_start_time',
        'rsv_end_time',
        'rsv_teacher_name',
        'rsv_student_name',
        'rsv_class',
        'rsv_week_day',
        'rsv_payment',
        'rsv_reserve_type',
        'unt_id',
        'crs_id',
        'rsv_teacher_code',
        'rsv_student_code',
    ];

}
