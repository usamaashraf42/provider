<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;
use Response;
class MainController extends Controller
{
    
    public function save(Request $request)
    {
    	$check=Signup::where('email','=',$request->email)->get();
    	if(count($check) > 0) {
    		return Response::json(['success'=>'0','message'=>'Email already exist']);

    	}else{
    	$save =Signup::create([
    		'fullname'=>$request->name,
    		'email'=>$request->email,
    		'password'=>bcrypt($request->password),
    		'phone'=>$request->phone
    	]);

    	if($save)
    	{
    		return Response::json(['success'=>'1','message'=>'New User registered successfully']);
    	}
    }
    }
}
