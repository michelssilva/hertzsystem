<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = 'progress';

    protected $primaryKey ='pro_id';

    protected $fillable =['pro_lesson','pro_data','pro_content','pro_book','pro_teacher_code',
        'pro_teacher_name','pro_student_code','pro_student_name','pro_week_day'];
}
