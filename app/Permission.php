<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $fillable = [
        'name',
        'display_name'
    ];
    public function Role()
    {
        return $this->belongsToMany(Role::class);
    }
}
