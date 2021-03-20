<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarSubCategory extends Model
{
    //

    protected $fillable = [
        'car_category_id',
        'name_ar',
        'name_en',
        'image',
        'status',
    ];
}
