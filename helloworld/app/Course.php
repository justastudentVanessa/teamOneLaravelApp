<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      protected $fillable = [
       'coursename','address','city','state', 'zip', 'phone',

    ];

}
