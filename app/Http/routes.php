<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
require_once __DIR__.'/home.php';


//正式环境
/*
 * 登录页面
 */
Route::get('login',function(){
   return view('login/login');
});
Route::any('logins/{name}/password/{password}',['uses'=>'LoginController@login']);
