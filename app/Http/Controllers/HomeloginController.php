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
    /**、
     * 返回登录二维码
     */
    public function qcode(){

        header("content-type:text/html;charset=utf-8");
        $redirect_uri="http://115.29.148.94/weixin.php";
        $redirect_uri=urlencode($redirect_uri);//该回调需要url编码
        $appID="wx6d0d45a85e8ca1d7";
        $scope="snsapi_login";//写死，微信暂时只支持这个值
        //准备向微信发请求
        $url = "https://open.weixin.qq.com/connect/qrconnect?appid=" . $appID."&redirect_uri=".$redirect_uri
            ."&response_type=code&scope=".$scope."&state=STATE#wechat_redirect";
        //请求返回的结果(实际上是个html的字符串)
        $result = file_get_contents($url);
        dump($result);die;
        //替换图片的src才能显示二维码
        $result = str_replace("/connect/qrcode/", "https://open.weixin.qq.com/connect/qrcode/", $result);
        return $result; //返回页面
    }
    /*
     * 公司登陆接口
     */
    public function login(Request $request){
        $company = $request->input();

        $password = md5(md5($company['password']));

        $data = DB::table('company')->where('phone', $company['phone'])->first();
        if($data){
            if($password != $data['password']){
                return response()->json(['code'=>4,'msg'=>'密码错误']);
            }else{
                return response()->json(['code'=>1,'msg'=>'登陆成功']);
            }
        }else{
            return response()->json(['code'=>3,'msg'=>'没有该用户']);
        }

    }
}