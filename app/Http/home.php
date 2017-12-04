<?php

/*
前端页面路由
*/
Route::get('webhome', function () {
    return view('home/index');
});

Route::get('home/login', function () {
    return view('home/login');
});
Route::get('home/reg', function () {
    return view('home/reg');
});