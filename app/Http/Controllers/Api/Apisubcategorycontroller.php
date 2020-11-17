<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subcategory;
use Response;
class Apisubcategorycontroller extends Controller
{
    public function apisubcategory($category_id)
    {
    	$list=Subcategory::where('category_id','=',$category_id)->get();
    	return Response::json($list);
    }
}
