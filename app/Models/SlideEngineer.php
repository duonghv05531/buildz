<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideEngineer extends Model
{
    public $fillable = [
        'name',
        'avatar',
        'department',
        'position'
    ];
}
