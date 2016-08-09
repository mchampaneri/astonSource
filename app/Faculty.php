<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    public function asUser()
    {
        return $this->belongsTo('App\User');
    }

    public function hasAssingment($subject_id)
    {
        $assingments = Assingment::where('faculty_id',$this->id)
                                    ->where('subject_id',$subject_id)
                                    ->get();
        return $assingments;
    }

}
