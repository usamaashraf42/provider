<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','AdminController@index');
Route::post('/adminlogin','AdminController@checklogin');
Route::get('successlogin','AdminController@successlogin');
Route::get('logout','AdminController@logout');
// Route::get('logout','AdminController@logout');

Route::group(['prefix'=>'admin'],function(){
	Route::get('/dashboard','AdminController@dashbaord');
	Route::get('/category','CategoryController@index');
	Route::post('/savecategory','CategoryController@save');

Route::get('/subcategory','SubcategoryController@index');
Route::post('/savesubcategory','SubcategoryController@save');
});
Route::group(['prefix'=>'admin'],function(){
	Route::get('/signup','MainController@index');
	Route::post('/save','MainController@save');
});
Route::group(['prefix'=>'category'],function(){
	Route::get('/allcategories','CategoryController@showall');
	Route::post('delete/{id}','CategoryController@delete');
	Route::get('edit/{id}','CategoryController@edit');
	Route::post('update','CategoryController@update');

});
Route::group(['prefix'=>'subcategory'],function(){
	Route::get('allsubcategory','SubcategoryController@showall');
	Route::post('delete/{id}','SubcategoryController@delete');
	Route::get('edit/{id}','SubcategoryController@edit');
	Route::post('update','SubcategoryController@update');
});
Route::group(['prefix'=>'user'],function(){
	Route::get('all','UsignupController@index');
	Route::post('delete/{id}','UsignupController@delete');
	Route::get('status/{id}','UsignupController@status');
});
Route::group(['prefix'=>'worker'],function(){
	Route::get('all','WsignupController@index');
	Route::post('delete/{id}','WsignupController@delete');
	Route::get('status/{id}','WsignupController@status');
});
Route::view('/verify', 'phone-verification');
Route::post('/verify', 'Api\TwilioController@verifyPhone')->name('verify-phone');
Route::post('/verify-code', 'Api\TwilioController@verifyCode')->name('verify-code');
Route::view('/send-sms', 'send-sms');
Route::post('/send', 'Api\TwilioController@verifyPhone')->name('send-sms');
