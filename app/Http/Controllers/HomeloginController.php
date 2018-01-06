<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeloginController extends Controller{

    //注册接口
    public function reg(Request $request){
        $company = $request->input();

        $password = md5(md5($company['password']));

        $result=DB::table("company")->insert(
            [
                'phone'=>$company['phone'],
                'email'=>$company['email'],
                'password'=>$password,
                'nature'=>$company['nature'],
                'company_name'=>$company['name'],
                'certificateNum'=>$company['certificateNum'],
                'sex'=>$company['sex'],
                'corporation'=>$company['corporation'],
                'address'=>$company['address'],
                'type'=>$company['type']
            ]
        );
        /*var_dump($result);die;*/
        if($result){
            return response()->json(['code' => '1', 'msg' => '注册成功']);
        }else{
            return response()->json(['code' => '2', 'msg' => '注册失败']);
        }



    }
}