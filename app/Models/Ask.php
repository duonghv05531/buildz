<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    public $fillable = [
        'question',
        'answer',
        'href'
    ];
}
