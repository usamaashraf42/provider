<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
      protected $fillable = [
        'fullname', 'email','password','phone'
    ];
}
