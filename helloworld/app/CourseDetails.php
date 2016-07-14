<?php

namespace CourseDetails;

use Illuminate\Foundation\Auth\CourseDetails as Authenticatable;

class CourseDetails extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //color must be set numerous times for the whole course
     //yardage must be set for each hole (18 holes)
     //handicap must be set for each hole and be unique (NO REPEATS!)
     //par must be set for each hole (number of swings it should take to complete ONE hole
    protected $fillable = [
        'color','yardage','handicap','par',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     //May or may not need this - if needed password will probably need to be changed to handicap
    protected $hidden = [
        'password', 'remember_token',
    ];
}
