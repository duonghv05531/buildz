<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    public $fillable = [
        'name',
        'avatar',
        'department',
        'position',
        'age',
        'address',
        'phone',
        'bank_number',
        'email'
    ];
}
