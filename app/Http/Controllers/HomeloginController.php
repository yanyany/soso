<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeloginController extends Controller{

    //注册接口
    public function reg(Request $request){
        $user = $request->input();
        echo "<pre>";
        print_r($user);
    }
}