<?php

namespace App\Http\Controllers;

use App\Usignup;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Hash;
class UloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function save(Request $request)
    {
        $obj=Usignup::where('email','=',$request->email)->first();
        if($obj) {
            if(Hash::check($request->password,$obj->password))
            {
                return Response::json(['success'=>'1','message'=>'User login Successfully']);
            }
            else{
       
            return Response::json(['success'=>'0','message'=>'Invalid Credentials']);
        }
        }else{
       
            return Response::json(['success'=>'0','message'=>'Invalid Email']);
        }
    
    }

  // public function login(Request $request)
  //   {
  //       $obj=Signup::where('email','=',$request->email)->orWhere('phone','=',$request->email)->first();
  //       if($obj) {
  //           if(Hash::check($request->password,$obj->password))
  //           {
  //               return Response::json(['success'=>'1','message'=>'User login Successfully']);
  //           }
  //           else{
       
  //           return Response::json(['success'=>'0','message'=>'Invalid Credentials']);
  //       }
  //       }    
  //       elseif($obj =Signup::where('phone','=',$request->phone)->first())
  //       {
       
  //          if(Hash::check($request->password,$obj->password))
  //           {
  //               return Response::json(['success'=>'1','message'=>'User login Successfully']);
  //           }
  //           else{
       
  //           return Response::json(['success'=>'0','message'=>'Invalid Credentials']);
  //       }
  //       }
  //       else{
  //           return Response::json(['success'=>'0','message'=>'Invalid Email or Number']);

  //       }
    
  //   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function show(Ulogin $ulogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function edit(Ulogin $ulogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulogin $ulogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulogin $ulogin)
    {
        //
    }
}
