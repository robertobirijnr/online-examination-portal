<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Answer;

class Result extends Model
{
    protected $fillable =['user_id','question_id','answer_id','quiz_id'];

    public function qustion(){
        return $this->belongsTo(Qustion::class);
    }

    public function answer(){
        return $this->belongsTo(Answer::class);
    }
}
