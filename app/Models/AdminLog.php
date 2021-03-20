<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    //
    protected $fillable = [
        'user_id',
        'log_type',
        'item_id',
        'item_id',
        'description_ar',
        'description_en',
    ];
}
