<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnerLesson extends Model
{
    public function section(){

        return $this->belongsTo('App\learnersection', 'session_id');
    }
}
