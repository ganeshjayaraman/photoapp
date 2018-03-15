<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "dummy";

    protected $fillable = [
        'room_id', 'student_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
