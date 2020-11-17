<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wsignup extends Model
{
   protected $fillable = [
        'fullname', 'email','password','phone'
    ];
}
