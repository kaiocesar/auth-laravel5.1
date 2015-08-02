<?php

namespace AppWeb\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permissions";

    public function roles()
    {
        return $this->belongsToMany('AppWeb\Entities\Role');
    }

}
