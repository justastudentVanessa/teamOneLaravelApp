<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;;

class CourseDetails extends Authenticatable
{
    //
    protected $fillable = [
    'teecolor', 'yardage', 'handicap', 'par',
    ];

    /**
     *
     *The attributes that should be hidden for arrays.
     *
     *@var array
     */
}
