<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnerCourse extends Model
{
    public function sections(){
        return $this->hasMany('App\learnersection');
    }
}
