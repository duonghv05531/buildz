<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $fillable = [
        'name',
        'img',
        'description',
        'delay'
    ];
}
