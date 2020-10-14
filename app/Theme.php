<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'themes';
    //relacion de uno a muchos
    public function subjects(){
        return $this->hasMany('App\subject', 'id_subjects');
    }
    public function teachers(){
        return $this->hasMany('App\User', 'user_id');
    }
    public function questions(){
        return $this->belongsTo('App\Question', 'id_question');
    }
    public function exam_details(){
        return $this->belongsTo('App\Exam_Detail', 'id_detail');
    }
    //relacion de uno a uno
    public function exams(){
        return $this->belongsTo('App\Exam', 'id_exam');
    }
}
