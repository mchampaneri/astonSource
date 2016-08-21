<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerByUser()
    {

        return Answer::where('user_id',1)
                        -> where('question_id',$this->id)
                        ->first();
    }
}
