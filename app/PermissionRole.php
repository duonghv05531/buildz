<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    public $fillable = [
        'role_id',
        'permission_id'
    ];
    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
