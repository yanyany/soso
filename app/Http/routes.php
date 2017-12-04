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

Route::get('/', function () {
    return view('welcome');
});
//基础路由
Route::get('ceshi',function(){
   return 'hello world';
});
Route::post('ceshi1',function(){
    return 'ceshi1';
});
/*
 * 多请求路由
 */
Route::match(['get','post'],'ceshi2',function(){
    return 'ceshi2';
});
Route::any('ceshi3',function(){
    return 'ceshi3';
});
/*
 * 路由参数
 */
Route::get('a/{id}',function($id){
    return $id;
});
Route::get('b/{name}',function($name){
    return $name;
});
Route::get('user/{id}/name{name?}',function($id,$name){
    return 'user-id-'.$id.'user-name'.$name;
})->where(['id'=> '[0-9]+','name' =>'[A-Za-z]+']);

/*
 * 路由群组
 */
Route::group(['prefix'=>'member'],function(){
    Route::get('a/{id}',function($id){
        return $id;
    });
    Route::get('b/{name}',function($name){
        return $name;
    });
});
/*
 * 输出控制器
 */
Route::any('test/{id}',['uses'=>'TestController@info']);

//正式环境
/*
 * 登录页面
 */
Route::get('login',function(){
   return view('login/login');
});
Route::any('logins/{name}/password/{password}',['uses'=>'LoginController@login']);
