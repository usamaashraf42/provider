<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/signup','MainController@index');
Route::post('Usignup','UsignupController@save');
Route::post('Ulogin','UloginController@save');
Route::post('Wsignup','WsignupController@signup');
Route::post('Wlogin','WloginController@login');
Route::get('Category','Api\Apicategorycontroller@apicategory');
Route::get('subcategory/{category_id}','Api\Apisubcategorycontroller@apisubcategory');
Route::get('Subcategory','SubcategoryController@apisubcategory');
Route::view('/verify', 'phone-verification');
Route::post('/verify', 'TwilioController@verifyPhone')->name('verify-phone');
Route::post('/verify-code', 'TwilioController@verifyCode')->name('verify-code');
Route::view('/send-sms', 'send-sms');
Route::post('/send', 'TwilioController@verifyPhone')->name('send-sms');
