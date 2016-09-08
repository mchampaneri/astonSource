<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerByUser($user_id = null)
    {
        if($user_id != null)
        {
             return Answer::where('user_id',$user_id)
                            -> where('question_id',$this->id)
                            ->first();
        }
        else {
            return Answer::where('user_id',\Auth::user()->id)
                            -> where('question_id',$this->id)
                            ->first();
        }
    }
}
