<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function myAnswers()
    {
        return Answer::where('user_id',\Auth::user()->id)
                        ->where('assignment_id',$this->id);
    }

    public static function Name($id)
    {
        return Assignment::find($id)->title;
    }
    
    

}
