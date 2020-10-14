<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';

    //relacion uno a muchos
    public function students(){
        return $this->hasMany('App\User', 'id');
    }
    public function teachers(){
        return $this->hasMany('App\User', 'id');
    }
    //relacion uno a uno
    public function exam_details(){
        return $this->hasOne('App\Exam_Detail', 'id');
    }
    public function themes(){
        return $this->hasOne('App\Theme', 'id');
    }
}
