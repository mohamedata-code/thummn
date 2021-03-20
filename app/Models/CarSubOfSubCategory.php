<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarSubOfSubCategory extends Model
{
    //
    protected $fillable = [
        'car_sub_category_id',
        'name_ar',
        'name_en',
        'image',
        'status',
    ];
}
