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
                <p class="on">账号登录</p>
                <p class=""><a href="{:url('index/Account/logincode')}">短信登录</a></p>
            </div>
            <div class="form1">
                <p class="p-input pos">
                    <label for="num">手机号/用户名/邮箱</label>
                    <input type="text" id="num" name="username">
                    <span class="tel-warn num-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos">
                    <label for="pass">请输入密码</label>
                    <input type="password" style="display:none"/>
                    <input type="password" id="pass" name="password" autocomplete="new-password">
                    <span class="tel-warn pass-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos code hide">
                    <label for="veri">请输入验证码</label>
                    <input type="text" id="veri">
                    <img src="">
                    <span class="tel-warn img-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                    <!-- <a href="javascript:;">换一换</a> -->
                </p>
            </div>
            <div class="r-forget cl">
                <a href="{:url('index/Account/register')}" class="z">账号注册</a>
                <!-- <a href="./getpass.html" class="y">忘记密码</a> -->
            </div>
            <input type="hidden" name="mode" value="password">
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
<script src="http://apps.bdimg.com/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="__STATIC__/{$Think.config.website.view_style}/js/agree.js"></script>
<script src="__STATIC__/{$Think.config.website.view_style}/js/login.js"></script>
<script type="text/javascript" src="__STATIC__/{$Think.config.website.view_style}/js/index.js"></script>
</body>
</html>