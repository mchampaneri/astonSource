<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerByUser()
    {

        return Answer::where('student_id',\Session::get('id'))
                        -> where('question_id',$this->id)
                        ->first();
    }
}
