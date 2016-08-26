<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerByUser()
    {

        return Answer::where('user_id',\Auth::user()->id)
                        -> where('question_id',$this->id)
                        ->first();
    }
}
