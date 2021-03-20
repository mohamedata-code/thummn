<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarSubOfSubCategoryPrice extends Model
{
    //
    protected $fillable = [
        'car_sub_of_sub_category_id',
        'year',
        'low_price',
        'below_normal',
        'normal',
        'above_normal',
        'high',
        'status',
    ];
}
