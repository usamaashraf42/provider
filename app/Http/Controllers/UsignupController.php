<?php

namespace App\Http\Controllers;

use App\Usignup;
use Illuminate\Http\Request;
use Response;
class UsignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Usignup::all();
        return view('admin/alluser',compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      
    public function save(Request $request)
    {
        $check=Usignup::where('email','=',$request->email)->get();
        if(count($check) > 0) {
            return Response::json(['success'=>'0','message'=>'Email already exist']);

        }else{
        $save =Usignup::create([
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
     * @param  \App\Usignup  $usignup
     * @return \Illuminate\Http\Response
     */
    public function show(Usignup $usignup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usignup  $usignup
     * @return \Illuminate\Http\Response
     */
    public function edit(Usignup $usignup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usignup  $usignup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usignup $usignup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usignup  $usignup
     * @return \Illuminate\Http\Response
     */
   public function delete($id)
    {
       $deleted =Usignup::find($id);
       $del=$deleted->delete();
       if($del)
       {
         return response()->json([
       
        'status'=>'0','success' => 'Record deleted successfully!'
    ]);
     }
     else
     {
         return response()->json([
       
        'status'=>'1','success' => 'Error while deleting record'
    ]);

     }
       }
       public function status($id)
       {
        $user=Usignup::find($id);
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
