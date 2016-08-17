<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Returns Assignment object of Answer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function assingment()
    {
        return $this->belongsTo('App\Assignment');
    }
}
