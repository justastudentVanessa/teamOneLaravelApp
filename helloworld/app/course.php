<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class courses  extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = [
       'coursename','address','city','state', 'zip', 'phone',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}

