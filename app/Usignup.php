<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usignup extends Model
{
    
      protected $fillable = [
        'fullname', 'email','password','phone'
    ];
}
