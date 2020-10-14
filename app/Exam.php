<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';

    //relacion uno a muchos
    public function students(){
        return $this->hasMany('App\User', 'user_id');
    }
    public function teachers(){
        return $this->hasMany('App\User', 'user_id');
    }
    //relacion uno a uno
    public function exam_details(){
        return $this->hasOne('App\Exam_Detail', 'id_detail');
    }
    public function themes(){
        return $this->hasOne('App\Theme', 'id_themes');
    }
}
