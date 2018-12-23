<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];


    public function course(){

        return $this->belongsTo('App\course');
    }


    public function lessons(){

        return $this->hasMany('App\lesson');
    }
}
