<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/jili/jianli_gr_a.css">
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/jili/jianli_gr_b.css">
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/jili/jianli_gr_c.css">
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/csh.css" />
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/swb.css" />
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/muban_hk.css" />
<link rel="stylesheet" href="{{ URL::asset('/') }}/web/css/jianli_gr.css" />
<script type="text/javascript" src="{{ URL::asset('/') }}/web/js/jsAddress.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}/web/js/laydate.js"></script>
<style type="text/css">
    .up-img-cover {width: 100px;height: 100px;}
    .up-img-cover img{width: 100%;}
</style>
</head>
    <body>
    	<div id="container">
    		<div id="header">
                <div id="logo"><a href="#"><img src="./img/logo.png" height="70px" alt="logo" /></a></div><ul>
                <li><a href="#">我的账号</a></li>
                <li><a href="#">我的信箱</a></li>
                <li><a href="#">我的投递</a></li>
                <li><a href="#">我的作品</a></li>
                <li><a href="#">我的简历</a></li>
                <li><a href="#">我的公司</a></li>
                <li><a href="#">首页</a></li></ul>
            </div>
            <div class="nav"></div>
    		<div id="main">
                <div id="huakuai">
                    <ul id="blue"><li><a href="#">个人信息</a></li></ul>
                    <ul><li><a href="#">教育信息</a></li></ul>
                    <ul><li><a href="#">工作简历</a></li></ul>
                </div>
                <div id="under"></div>
                <div id="underline"></div>
                <div id="biaodan">
                    <div id="up">
                        <div id="lside">
                            <div id="one">
                                <div class="up-img-cover"  id="up-img-touch" >
                                        <img class="am-circle" alt="点击图片上传" src="img/hu.jpg" data-am-popover="{content: '点击上传', trigger: 'hover focus'}" >
                                </div>
                                <div><a style="text-align: center; display: block;"  id="pic"></a></div>
        
                                <!--图片上传框-->
                                <div class="am-modal am-modal-no-btn up-frame-bj " tabindex="-1" id="doc-modal-1">
                                   <div class="am-modal-dialog up-frame-parent up-frame-radius">
                                     <div class="am-modal-hd up-frame-header">
                                        <label>修改头像</label>
                                       <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                     </div>
                                     <div class="am-modal-bd  up-frame-body">
                                       <div class="am-g am-fl">
                                         <div class="am-form-group am-form-file">
                                           <div class="am-fl">
                                             <button type="button" class="am-btn am-btn-default am-btn-sm">
                                               <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                                           </div>
                                           <input type="file" id="inputImage">
                                         </div>
                                       </div>
                                       <div class="am-g am-fl" >
                                         <div class="up-pre-before up-frame-radius">
                                             <img alt="" src="" id="image" >
                                         </div>
                                         <div class="up-pre-after up-frame-radius">
                                         </div>
                                       </div>
                                       <div class="am-g am-fl">
                                         <div class="up-control-btns">
                                             <span class="am-icon-rotate-left"  onclick="rotateimgleft()"></span>
                                             <span class="am-icon-rotate-right" onClick="rotateimgright()"></span>
                                             <span class="am-icon-check" id="up-btn-ok" url="/admin/user/upload.action"></span>
                                         </div>
                                       </div>
              
                                     </div>
                                   </div>
                                </div>
        
                                <!--加载框-->
                                <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
                                   <div class="am-modal-dialog">
                                     <div class="am-modal-hd">正在上传...</div>
                                     <div class="am-modal-bd">
                                       <span class="am-icon-spinner am-icon-spin"></span>
                                     </div>
                                   </div>
                                </div>
        
                                <!--警告框-->
                                <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
                                   <div class="am-modal-dialog">
                                     <div class="am-modal-hd">信息</div>
                                     <div class="am-modal-bd"  id="alert_content">
                                               成功了
                                     </div>
                                     <div class="am-modal-footer">
                                       <span class="am-modal-btn">确定</span>
                                     </div>
                                   </div>
                                </div>
                            </div>
                            <div id="two">
                                <li>出生年月： <input onClick="laydate()" id="demo"></li>
                                <li>现居住地： <select id="Select1"></select>
                                               <select id="Select2"></select>
                                               <select id="Select3"></select></li>
                                <li>期望薪水： <input type="text" name="salary" size="5"/>
                                    &nbsp&nbsp--&nbsp&nbsp&nbsp<input type="text" name="salary" size="5"/></li>
                            </div>
                        </div>
                        <div id="rside">
                            <li class="lz">姓名： <input type="text" name="name" size="8"/></li>
                            <li class="lz">性别： &nbsp&nbsp<input type="radio" name="gender" value="男" checked="checked"/>
                                                                                                男&nbsp&nbsp&nbsp&nbsp&nbsp
                                                  <input type="radio" name="gender" value="女"/>女</li>
                            <li class="lz">电话： <input type="text" name="cell"/></li>
                            <li class="lz">邮箱： <input type="text" name="mail"/></li>
                            <li class="lz">籍贯： <input type="text" name="Native place"/></li>
                            <li>求职意向： <input type="text" name="name"/></li>
                        </div>
                    </div>
                    <div id="down">
                        <br />个人评估：<br /><br />
                        <textarea name="comments" id="comments" cols="80" rows="10" onkeyup="javascript:chkmaxsms(this,'300')"></textarea><br />
                        <br /><br />自我评价：<br /><br />
                        <textarea name="comments" id="comments" cols="80" rows="10" onkeyup="javascript:chkmaxsms(this,'300')"></textarea>
                    </div>
                </div>
                <div id="anniu">
                    <form class="blue">
                    <input type="submit" value="提&nbsp&nbsp交">
                </div>
                <div id="margin"></div>
            </div>
    		<div id="footer"><ul>
                <li><a href="#">关于</a></li>
                <li><a href="#">反馈</a></li>
                <li><a href="#">投诉</a></li></ul>
            </div>
    	</div>
    </body>
</html>

<script language="javascript" type="text/javascript">
function   chkmaxsms(vobj1,vmax)   {   
  var   str=vobj1.value;   
  var   strlen=str.length;   
    
  if(strlen>vmax)   {   
  alert('字数请勿超过300');   
  eval(vobj1.value=str.substr(0,vmax));   
  }   
  }   
</script>

<script type="text/javascript">
    addressInit('Select1', 'Select2', 'Select3');
</script>

<script>
;!function(){
laydate({
   elem: '#demo'
})
}();
</script>

        <script src="js/jianli_gr_a.js" charset="utf-8"></script>
        <script src="js/jianli_gr_b.js" charset="utf-8"></script>
        <script src="js/jianli_gr_c.js" charset="utf-8"></script>
        <script src="js/jianli_gr_d.js" charset="utf-8"></script>