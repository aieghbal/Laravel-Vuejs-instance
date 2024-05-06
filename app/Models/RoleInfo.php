<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleInfo extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsToMany('App\Roles\Role');
    }
}
