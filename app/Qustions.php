<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
use App\Quiz;
use App\Qustions;

class Qustions extends Model
{
    protected $fillable = ['question','quiz_id'];
    private $limit = 10;
    private $order = 'DESC';

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function storeQuestion($data){
        $data['quiz_id'] = $data['quiz'];
        return Qustions::create($data);
    }

    public function getAllQuestions(){
        return Qustions::orderBy('created_at',$this->order)->with('quiz')->paginate($this->limit);
    }
}
