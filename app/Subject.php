<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public static function Name($id)
    {
        return Subject::find($id)->name;
    }

    public function scopeDepartment($query, $department_id)
    {
        return $query->where('department_id', $department_id)
            ->get();
    }
    
    
}
