<?php
namespace App\Http\Controllers;

class TestController extends Controller{
    public function info($id){
       return '测试'.$id;
        //return view('test/test');
    }
}