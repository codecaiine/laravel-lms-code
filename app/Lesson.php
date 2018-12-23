<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function section(){

        return $this->belongsTo('App\section', 'session_id');
    }
}
