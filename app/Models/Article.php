<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable = [
        'category_id',
        'title',
        'img',
        'content',
        'author'
    ];
}
