<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Qustion;

class Quiz extends Model
{
    protected $fillable = ['name','description','minutes'];

    public function questions(){
        return $this->hasMany(Question::class);
    }
}