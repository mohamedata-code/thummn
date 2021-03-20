<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    //
    protected $fillable = [

        'name_ar',
        'name_en',
        'description_ar',
        'description_en',

    ];
}
