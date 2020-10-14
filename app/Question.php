<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    //relacion uno a muchos
    public function themes(){
        return $this->hasMany('App\Theme', 'id');
    }
    public function exam_details(){
        return $this->belongsTo('App\Exam_Detail', 'id');
    }
}
