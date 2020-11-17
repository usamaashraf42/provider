<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
 
    
public function index()
{
    if(Auth::check()) {
    return view('admin/dashboard');
        }
        else{
         return view('admin/login');   
        }
    
}
public function checklogin(Request $request)
{
    $messages =[
        'required'=>'The :attribute is required',
    ];
    $request->validate([
        'email'=>'required',
        'password'=>'required',
    ],$messages);
    $user_data = array(
        'email' => $request->email,
        'password'=>$request->password
        );
        if(Auth::attempt($user_data))
        {
                return redirect('successlogin');
            }
    else
    {
        return back()->with('message','Incorrect email or password');
    }
}
public function successlogin()
{
    if(Auth::check()) {
            return view('admin.dashboard');
        }

        return redirect('/')->with('message','Oopps! You do not have access');
    

}
public function logout()
{
    Auth::logout();
    return view('admin/login');
}
public function dashbaord(){
            return view('admin.dashboard');
}    
}