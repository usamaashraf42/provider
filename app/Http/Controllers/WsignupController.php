<?php

namespace App\Http\Controllers;

use App\Wsignup;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Hash;
class WsignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $user= Wsignup::all();
        return view('admin/allworker',compact('user'));

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
    public function signup(Request $request)
    {
        $check =Wsignup::where('email','=',$request->email)->get();
        if(count($check) >0)
        {
            return Response::json(['status'=>'0','message'=>'Email already exist']);
        }
        else
        {
           $save = Wsignup::create([
                'fullname'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone
            ]);
           if($save)
           {
            return Response::json(['status'=>'1','message'=>'Service Provider successfully registered']);
           }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wsignup  $wsignup
     * @return \Illuminate\Http\Response
     */
    public function show(Wsignup $wsignup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wsignup  $wsignup
     * @return \Illuminate\Http\Response
     */
    public function edit(Wsignup $wsignup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wsignup  $wsignup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wsignup $wsignup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wsignup  $wsignup
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $deleted =Wsignup::find($id);
       $del=$deleted->delete();
       if($del)
       {
         return response()->json([
       
        'status' =>'0','message'=> 'Record deleted successfully!'
    ]);
     }
     else
     {
         return response()->json([
       
        'status'=>'1','success' => 'Error whilte deleting record'
    ]);

     }
       }
        public function status($id)
       {
        $user=Wsignup::find($id);
        if($user)
        {
            if($user->status == "1")
            {
                $user->status = "0";
            }
            else if($user->status== "0")
            {
                $user->status = "1";

            }
            $save=$user->save();
            if($save)
            {
            return Response::json(['status'=>'0','message'=>'status has been changed']);
        }
        else
        {
            return Response::json(['status'=>'1','message'=>'Error during status changed']);

        }

            }
        }
}
