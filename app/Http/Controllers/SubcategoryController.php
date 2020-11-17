<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use Response,File,Redirect;
class SubcategoryController extends Controller
{
    public function index(){
    	$category_list=Category::all();
    	return view('admin.subcategory',compact('category_list'));
    }
    public function showall()
    {
        $subcategories =Subcategory::with('category')->get();
        
        return view('admin/allsubcategories',compact('subcategories'));
    }

    public function save(Request $request){
    	$messages=array(
    		'name.required'=>'This field is required',
    		'price.required'=>'This field is required',
    		'category_id.required'=>'This field is required',
    	);
    	$rules=array(
    		'name'=>'required|string|unique:subcategories',
    		'price'=> 'required',
    		'category_id'=>'required',
    	);
    	$validator=\Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}else{
    		$subcategory=new Subcategory();
    	$subcategory->category_id=$request->category_id;
    	$subcategory->name=$request->name;
    	$subcategory->price=$request->price;
    	if($subcategory->save()){
    		return Response::json(['success' => '1','message' => 'Subcategory added successfully']);
    	}else{
    		 return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

    	}

    	}
    	
    }
     public function delete($id)
    {
       $deleted =Subcategory::find($id);
       $del=$deleted->delete();
       if($del)
       {
         return response()->json([
       
        'success' => 'Record deleted successfully!'
    ]);
     }
       }
   public function edit($id)
    {
        $categories=Category::all();
        $subcategories=Subcategory::find($id);
        return view('admin/subcategoryupdate',['subcategories'=>$subcategories,'categories'=>$categories]);
    }
      public function update(Request $request){

      $messages=array(
            'name.required'=>'This field is required',
            'price.required'=>'This field is required',
           'category_id.required'=>'This field is required',
        );
        $rules=array(
            'name'=>'required|string|unique:subcategories',
            'price'=> 'required|unique:subcategories',
            'category_id'=>'required',
        );
        $validator=\Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }else{
            $subcategory= Subcategory::find($request->id);
        $subcategory->category_id=$request->category_id;
        $subcategory->name=$request->name;
        $subcategory->price=$request->price;
        if($subcategory->save()){
            return Response::json(['success' => '1','message' => 'Subcategory updated successfully']);
        }else{
             return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

        }

        }
    }

    
}
