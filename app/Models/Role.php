<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function roleInfo()
    {
        return $this->hasOne('App\Models\RoleInfo','id','role_type');
    }
}
