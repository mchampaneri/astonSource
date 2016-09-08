<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Submit extends Model
{
    public static function submitId($assignment_id)
    {
        return Submit::where('assignment_id',$assignment_id)
                        ->where('user_id',Auth::user()->id)
                        ->first()->id;
    }

    public static function submitStatus($assignment_id)
    {
        return Submit::where('assignment_id',$assignment_id)
            ->where('user_id',Auth::user()->id)
            ->first()->status;
    }

    public static function submitExists($assignment_id)
    {
        return Submit::where('assignment_id',$assignment_id)
                        ->where('user_id',Auth::user()->id)
                        ->exists();
    }
}
