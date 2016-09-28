<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User')->first();
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public static function Name($id)
    {
      return Faculty::find($id)->name;
    }

    public function scopeDepartment($query,$id)
    {
        return $query->where('department_id',$id)->get();
    }
}
