<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarOrderImage extends Model
{
    //
    protected $fillable = [
        'car_title',
        'car_category_id',
        'car_sub_category_id',
        'car_sub_of_sub_category_id',
        'car_sub_of_sub_category_price_id',
        'car_estimate_price',
        'car_low_price',
        'car_used_persons',
        'question_answers',
        'high_price',
        'fair_price',
        'low_price',
        'status',
    ];


}
