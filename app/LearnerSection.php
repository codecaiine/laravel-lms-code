<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnerSection extends Model
{
    public function course(){

        return $this->belongsTo('App\learnercourse');
    }


    public function lessons(){

        return $this->hasMany('App\learnerlesson');
    }
}
