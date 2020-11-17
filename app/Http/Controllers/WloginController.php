<?php

namespace App\Http\Controllers;

use App\Wsignup;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Hash;
class WloginController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $var =Wsignup::where('email','=',$request->email)->first();
        if($var)
            if(Hash::check($request->password,$var->password))
            {
                return Response::json(['status'=>'1','message'=>'Successfully login']);
            }
            else
            {
                return Response::json(['status'=>'0','message'=>'invalid password']);
            }
        else
        {
            return Response::json(['status'=>'0','message'=>'Invalid email']);

        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wlogin  $wlogin
     * @return \Illuminate\Http\Response
     */
    public function show(Wlogin $wlogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wlogin  $wlogin
     * @return \Illuminate\Http\Response
     */
    public function edit(Wlogin $wlogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wlogin  $wlogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wlogin $wlogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wlogin  $wlogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wlogin $wlogin)
    {
        //
    }
}
