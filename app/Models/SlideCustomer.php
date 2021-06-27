<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideCustomer extends Model
{
    public $fillable = [
        'name',
        'avatar',
        'profession',
        'opinion'
    ];
}
