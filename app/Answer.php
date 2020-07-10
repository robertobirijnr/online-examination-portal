<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Answer extends Model
{
    protected $fillable = ['question_id','answer','is_correct'];

    public function qustion(){
        return $this->belongsTo(Question::class);
    }
}
