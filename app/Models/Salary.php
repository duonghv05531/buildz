<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public $fillable = [
        'position_id',
        'factor'
    ];
}
