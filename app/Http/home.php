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
Route::get('home/personReg',function(){
   return view('home/personReg');
});
Route::get('home/schoolReg',function(){
    return view('home/schoolreg');
});
Route::get('home/companyReg',function(){
    return view('home/companyreg');
});
Route::get('home/resumepersonl',function(){
    return view('home/resumepersonl');
});
