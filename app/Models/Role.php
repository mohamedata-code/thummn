<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    protected $fillable = [
        'name',
        'display_name_ar',
        'display_name_en',
        'description',
    ];
}
