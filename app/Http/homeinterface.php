<?php

/*
 * 前端注册接口
 */
Route::post('/homereg','HomeloginController@reg');
//二维码登录
Route::get('/qcode','HomeloginController@qcode');
//前端登陆接口
