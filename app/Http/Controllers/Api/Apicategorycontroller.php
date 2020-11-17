<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Category;
class Apicategorycontroller extends Controller
{
     public function apicategory()
    {
      return Response::json(Category::all());
    }
}
