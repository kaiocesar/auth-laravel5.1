<?php

namespace AppWeb\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    public function users()
    {
        return $this->belongsToMany('AppWeb\Entities\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('AppWeb\Entities\Permission');
    }
}
