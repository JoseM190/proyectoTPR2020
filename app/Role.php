<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    //relacion uno a uno
    public function users(){
        return $this->hasMany('App\User', 'user_id');
    }
}
