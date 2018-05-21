<!DOCTYPE html>
<html>
<head>
<title>会员注册 - {$Think.config.website.webname}</title>
<meta charset="utf-8">
{include file="./theme/pc/meta.php"}
<script src="__STATIC__/libs/jquery.validation/1.14.0/jquery.validate.js"></script>
<script src="__STATIC__/libs/jquery.validation/1.14.0/messages_cn.js"></script>
<script src="__STATIC__/libs/jquery.validation/1.14.0/additional-methods.js"></script>
<style>
.regform .error{color:red;}
.regform span{display: block}
.regform{width: 1180px; margin: 20px auto; background: #fff; padding: 30px; border: 1px solid #E4E4E4; text-align: center; display:block; overflow: hidden;}
.regform span{width: 100%; height: 80px; text-align: center; border-bottom: 1px solid #E4E4E4; font-size: 28px; overflow: hidden; display: block; color: red;}
.regform header{position: relative;}
.regform h2{font-size: 30px; margin-bottom: 30px;}
.regform .login{position: absolute; top: 10px; right: 20px;}
.regform .login a{color: #00b7d3;}
.regform .form-group{margin-bottom: 30px;}
.yellow_button{border:none; overflow:hidden; display:block; text-align:center;color:#fff;background-position:0 0; margin: 20px auto;}
</style>
</head>
<body>
<iframe src="{$iframe}" width="100%" id="register" name="register" onload="changeFrameHeight()" scrolling="auto" frameborder="0"></iframe>
<script type="text/javascript">
function changeFrameHeight(){
    var ifm= document.getElementById("register"); 
    ifm.height=document.documentElement.clientHeight;
}
window.onresize=function(){  
    changeFrameHeight();  
}
</script>
</body>
</html>