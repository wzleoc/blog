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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->group(function(){

	Route::get('lnn/index','LnnController@index');
//	Route::get('user/index/{name?}','UserController@index')->where(['name'=>'[0-9]+']);//可以有这个name参数可以没有
	Route::get('user/index/{name?}','UserController@index');//可以有这个name参数可以没有
	Route::get('api/user/{admin}',function(App\User $user){

		return $user->name;
	});//可以有这个name参数可以没有
});
