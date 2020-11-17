<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Response,File,Redirect,Session;
use Image;
class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category');
    }
       public function save(Request $request){

    	$messages=array(
    		'name.required'=>'This field is required',
    		'image.required'=>'This field is required',
    		'image.image'=>'Please select a image file',
    	);
    	$rules=array(
    		'name'=>'required|string|unique:categories',
    		'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    	);
    	$validator=\Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}
    	else{
    		
    	$category=new Category();
    	$category->name=$request->name;
        $image=$request->image;
        if(!empty($image))
        {
          $destinationPath =public_path().'/project_assets/category/images';
          if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
          }
        $filename           = time().$image->getClientOriginalName();

        $image->move($destinationPath, $filename);

        $img = Image::make($destinationPath.'/'.$filename);
        $img->resize(250, 250,
          function ($constraint) {
            $constraint->aspectRatio();
          });
          if (!file_exists($destinationPath.'/'.'thumb/')) {
            mkdir($destinationPath.'/'.'thumb/', 0777, true);
          }
          $img->save($destinationPath.'/thumb/'.$filename);
          $category->image=$filename;
            if($category->save()){
              return Response::json(['success' => '1','message' => 'Category added successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
    	}


    }

    public function showall(){
       $category =Category::all();
      return view('admin/allcategories',compact('category'));
      
    }
    public function delete($id)
    {
       $deleted =Category::find($id);

       if($deleted->delete())
       {
         unlink(public_path().'/project_assets/category/images/'.$deleted->image);
            unlink(public_path().'/project_assets/category/images/thumb/'.$deleted->image);
         return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
       }
  
    }
    public function edit($id)
    {
        $categories=Category::find($id);
        return view('admin/update',compact('categories'));
    }
      public function update(Request $request){

      $messages=array(
        'name.required'=>'This field is required',
       
      );
      $rules=array(
        'name'=>'required|string|unique:categories',
       
      );
      $validator=\Validator::make($request->all(),$rules,$messages);
      if($validator->fails()){
        return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
      }
      else{
      $category= Category::find($request->id);
      $category->name=$request->name;
      if($request->image=='')
      {
        $category= Category::find($request->id);
      $category->name=$request->name;
      $category->save();
               return Response::json(['success' => '1','message' => 'Category update successfully']);

      }
      else{
        $image=$request->image;
        if(!empty($image))
        {
          $destinationPath =public_path().'/project_assets/category/images';
          if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
          }
        $filename           = time().$image->getClientOriginalName();

        $image->move($destinationPath, $filename);

        $img = Image::make($destinationPath.'/'.$filename);
        $img->resize(250, 250,
          function ($constraint) {
            $constraint->aspectRatio();
          });
          if (!file_exists($destinationPath.'/'.'thumb/')) {
            mkdir($destinationPath.'/'.'thumb/', 0777, true);
          }
          $img->save($destinationPath.'/thumb/'.$filename);
          $category->image=$filename;
            if($category->save()){
              return Response::json(['success' => '1','message' => 'Category update successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
      }
    }


    }


   
}
