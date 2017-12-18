<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>企业注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/csh.css" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/muban.css" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/zhuce_qy.css" />
    <script type="text/javascript" src="{{ URL::asset('/') }}/web/js/jsAddress.js"></script>
</head>
<body>
<div id="container">
    <div id="header">
        <div id="logo"><a href="#"><img src="{{ URL::asset('/') }}/web/images/logo.png" height="70px" alt="logo" /></a></div><ul>
            <li><a href="#">我的账号</a></li>
            <li><a href="#">我的信箱</a></li>
            <li><a href="#">我的投递</a></li>
            <li><a href="#">我的作品</a></li>
            <li><a href="#">我的简历</a></li>
            <li><a href="#">我的公司</a></li>
            <li><a href="#">首页</a></li></ul>
    </div>
    <div class="nav"></div>
    <div id="font">
        <li>
            <span>已有账号</span>
            <span><a href="/home/login">立即登录&gt&gt</a></span>
        </li>
    </div>
    <div id="main">
        <div id="biaodan">
            <div id="lside">
                <ul id="left">
                    <li class="saz">手机号： <input type="text" id="phone" name="phone" value=""/></li>
                    <li class="saz">验证码： <input type="text" name="verify"/></li>
                    <li class="lz">邮箱： <input type="text" id="email" value="" name="mail"/></li>
                    <li class="lz">密码： <input type="password" id="password" value="" name="password"/></li>
                    <li>确认密码： <input type="password" id="passwords" value=""  name="passwords"/></li>
                </ul>
            </div>
            <div id="rside">
                <ul id="right">
                    <li>企业性质： <input type="radio" id="property" name="property" value="1" />民营
                        <input type="radio" id="property" name="property" value="2"/> 国营</li>
                    <li>公司名称： <input type="text" id="name" value="" name="name"/></li>
                    <li class="sz">联系人： <input type="text" id="contacts" value="" name="contacts" size="8"/>
                        <input type="radio" id="gender" name="gender" value="1" />先生
                        <input type="radio" id="gender" name="gender" value="2"/>女士</li>
                    <li>组织机构代码/工商证号： <input type="text" id="business" value="" name="business"/></li>
                    <li>公司地址：  <select id="Select1"></select>
                        <select id="Select2"></select>
                        <select id="Select3"></select>
                    </li>
                </ul>
            </div>
            <input class="blue" type="button" id="button" value="注&nbsp&nbsp册">
        </div>
    </div>
    <div id="footer"><ul>
            <li><a href="#">关于</a></li>
            <li><a href="#">反馈</a></li>
            <li><a href="#">投诉</a></li></ul>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="{{ URL::asset('/') }}/web/js/jquery/jquery.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}/web/js/layer/layer.js"></script>
<script type="text/javascript">
    addressInit('Select1', 'Select2', 'Select3');
</script>
<script type="text/javascript">
    $("#button").click(function(){
        var phone = $("#phone").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var passwords = $("#passwords").val();
        var nature = $("#property").val();
        var name = $("#name").val();
        var corporation = $("#property").val();
        var sex = $("#gender").val();
        var certificateNum = $("#business").val();
        var address = $("#Select1").val()+'/'+$("#Select2").val()+'/'+$("#Select3").val();
        if(password != passwords){
            layer.msg('两次输入的密码不一致,请重新输入');
            return false;
        }
        $.ajax({
            url:"/homereg",
            type:"post",
            dataType:"json",
            data:{
                'phone':phone,
                'email':email,
                'password':password,
                'nature':nature,
                'name':name,
                'corporation':corporation,
                'sex':sex,
                'certificateNum':certificateNum,
                'address':address
            },
            success:function(json){
                if(json.code == 1){
                    layer.msg(json.msg);
                }else{
                    layer.msg(json.msg);
                    return false;
                }
            }
        })
    })
</script>