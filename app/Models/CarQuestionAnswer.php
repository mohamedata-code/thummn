<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarQuestionAnswer extends Model
{
    //

    protected $fillable = [
        'car_question_id',
        'name_ar',
        'name_en',
        'image',
        'correct',
        'status',
    ];
}
