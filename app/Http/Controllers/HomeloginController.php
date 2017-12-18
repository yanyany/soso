<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeloginController extends Controller{

    //注册接口
    public function reg(Request $request){
        $user = $request->input();
        var_dump($user);
    }
}