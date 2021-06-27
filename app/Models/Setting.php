<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $fillable = [
        'work_time',
        'hotline',
        'email',
        'address',
        'site_name',
        'year'
    ];
}
