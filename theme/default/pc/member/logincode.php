<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户登录 - {$Think.config.website.webname}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="网站关键词">
    <meta name="Description" content="网站介绍">
    <link rel="stylesheet" href="__STATIC__/{$Think.config.website.view_style}/css/base.css">
    <link rel="stylesheet" href="__STATIC__/{$Think.config.website.view_style}/css/iconfont.css">
    <link rel="stylesheet" href="__STATIC__/{$Think.config.website.view_style}/css/reg.css">
{include file="./theme/tot/pc/meta.php"}
</head>
<body>
{include file="./theme/tot/pc/header.php"}
<div id="ajax-hook"></div>
<div class="wrap">
    <div class="wpn">
    <form action="{:url('index/Account/log')}" method="post">
        <div class="form-data pos">
            <a href=""><!-- <img src="./img/logo.png" class="head-logo"> --></a>
            <div class="change-login">
                <p class=""><a href="{:url('index/Account/login')}" target="">账号登录</a></p>
                <p class="on">短信登录</p>
            </div>
            
            <div class="form2">
                <p class="p-input pos">
                    <label for="num2">手机号</label>
                    <input type="number" id="mobile" name="mobile">
                    <span class="tel-warn num2-err hide"><em>账号或密码错误</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos">
                    <label for="veri-code">输入验证码</label>
                    <input type="number" id="veri-code" name="code">
                    <a href="javascript:;" class="send" id="getCode">发送验证码</a>
                    <span class="time hide"><em>120</em>s</span>
                    <span class="tel-warn error hide">验证码错误</span>
                </p>
            </div>
            <div class="r-forget cl">
                <a href="{:url('index/Account/register')}" class="z">账号注册</a>
                <!-- <a href="./getpass.html" class="y">忘记密码</a> -->
            </div>
            <input type="hidden" name="mode" value="code">
            <button class="lang-btn off log-btn">登录</button>
            <!-- <div class="third-party">
                <a href="#" class="log-qq icon-qq-round"></a>
                <a href="#" class="log-qq icon-weixin"></a>
                <a href="#" class="log-qq icon-sina1"></a>
            </div> -->
            <p class="right">{$Think.config.website.copyright} <a href="{$Think.config.website.domain}">{$Think.config.website.webname}</a></p>
        </div>
    </form>
    </div>
</div>
<script type="text/javascript">
$().ready(function() {
    // $("#commentForm").validate({
    //     submitHandler:function(form){
    //      alert("tijiaoshijian");
    //      alert($("form").serialize());
    //         $.post("{:url('index/Account/reg')}",$("form").serialize(),function(data){
    //             alert(data);
    //         },json);
    //     },
    //     debug:true,
    //     errorElement:"span",
    //     errorPlacement: function(error, element) {
    //         $(element).closest("p").append(error);  //
    //     },
    // });
    $("#mobile").blur(function(){
        if (!$("#mobile").val().match(/^(((1[3|5|7|8][0-9]{1})|145|147|149)+\d{8})$/)) {
            $('#getCode').attr('disabled','disabled');
        }else {
            $('#getCode').removeAttr('disabled');
        }
    });
    var test = {
        node:null,
        count:60,
        start:function(){
            if(this.count > 0){
                this.node.html = this.count--+"秒后重发"
                var _this = this;
                setTimeout(function(){
                    _this.start();
                },1000);
            }else{
                this.node.removeAttribute("disabled");
                this.node.value = "获取验证码";
                this.count = 60;
            }
        },
        //初始化
        init:function(node){
            this.node = node;
            this.node.setAttribute("disabled",true);
            this.start();
        }
    };
    $("#getCode").click(function(){
        var mobile=$("#mobile").val();
        if (mobile.match(/^(((1[3|5|7|8][0-9]{1})|145|147|149)+\d{8})$/)) {
            $.get("{:url('account/Sms/send')}?action=getcode&mobile="+mobile); //数据库版本使用代码
            test.init(document.getElementById("getCode"));
        }
    });
});
</script>
<script src="__STATIC__/{$Think.config.website.view_style}/js/agree.js"></script>
<script src="__STATIC__/{$Think.config.website.view_style}/js/login.js"></script>
<script type="text/javascript" src="__STATIC__/{$Think.config.website.view_style}/js/index.js"></script>
</body>
</html>