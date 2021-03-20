<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarQuestion extends Model
{
    //
    protected $fillable = [
        'question_ar',
        'question_en',
        'description_ar',
        'description_en',
        'status',

    ];
}
