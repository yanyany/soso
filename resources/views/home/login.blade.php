<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{ URL::asset('/') }}web/css/login.css" />
</head>
    <body>
    	<div id="container">
    		<div id="herder">
                <div id="block"></div>
    			<ul id="zc">
    				<a href="#" title="注册">立即注册&gt;&gt;</a>
    			</ul>
            </div>
    		<div id="main">
    			<div id="lside"></div>
    			<div id="rside">
                    <ul class="woaicss_title woaicss_title_bg1" id="woaicsstitle">
                    <li><a href="#" target="_blank" onmouseover="javascript:woaicssq(1)">微信登录</a></li>
                    <li><a href="#" target="_blank" onmouseover="javascript:woaicssq(2)">账号登录</a></li>
                    </ul>
                    <div id="ewm"></div>
                    <div class="woaicss_con" id="woaicss_con1" style="display:block;    margin-left: 100%;">
                       <ul>
                        <li>·<a href="#" title=""><img src={{ URL::asset('/') }}/images/ewm.jpg" alt="二维码" /></a></li>
                       </ul>
                     </div>
                     <div class="woaicss_con" id="woaicss_con2" style="display:none;margin-left: 100%;">
                       <ul>
                        <li>账号<input type="text"  /></li>
                        <li>密码<input type="password"  /></li>
                        <li><button type="button" style="background:#3366cc;width:30%;margin-top: 10px;margin-left: 4%;" class="button">登录</button></li>
                       </ul>
                     </div>
                    <h2 id="wc">微信扫码登录或注册</h2>
                </div>
    		<div id="footer">
            <ul>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">意见反馈</a></li>
                <li><a href="#">加入我们</a></li>
                <li><a href="#">商业合作</a></li>
            </ul>
            </div>
            <div id="di"></div>
    	</div>
    </div>
    </body>
</html>
<script type="text/javascript" src="{{ URL::asset('/') }}/web/js/jquery-1.7.2.min.js"></script>
<script language="javascript">
 function woaicssq(num){
 for(var id = 1;id<=4;id++)
 {
 var MrJin="woaicss_con"+id;
 if(id==num)
 document.getElementById(MrJin).style.display="block";
 else
 document.getElementById(MrJin).style.display="none";
 }
 if(num==1)
 document.getElementById("woaicsstitle").className="woaicss_title woaicss_title_bg1";
 if(num==2)
 document.getElementById("woaicsstitle").className="woaicss_title woaicss_title_bg2";
 }
</script>
