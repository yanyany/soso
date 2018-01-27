<?php

/*
 * 前端登录接口
 */
Route::post('/homereg','HomeloginController@reg');
//二维码登录
Route::get('/qcode','HomeloginController@qcode');
