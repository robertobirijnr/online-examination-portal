<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Qustion;
use App\Quiz;

class Quiz extends Model
{
    protected $fillable = ['name','description','minutes'];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function storeQuiz($data){
        return Quiz::create($data);
    }

    public function allQuiz(){
        return Quiz::all();
    }

    public function getQuizById($id){
        return Quiz::find($id);
    }

    public function updateQuiz($data,$id){
        return Quiz::find($id)->update($data);
    }

    public function deleteQuiz($id){
        return Quiz::find($id)->delete();
    }
}
