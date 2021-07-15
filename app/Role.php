<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $fillable = [
        'name',
        'display_name'
    ];
    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
