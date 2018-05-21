<!DOCTYPE html>
<html>
<head>
<title>会员注册链接生成 - {$Think.config.website.webname}</title>
<meta charset="utf-8">
{include file="./theme/pc/meta.php"}
<style type="text/css">
	.body{width: 1000px; margin-top: 30px;}
</style>
</head>
<body>
<div class="container body">
	<label>姓名</label>
	<input type="text" name="realname" id="realname">
	<label>社交账号</label>
	<input type="text" name="smacc" id="smacc">
	<label>手机</label>
	<input type="text" name="mobile" id="mobile">
	<a href="javascript:build()">生成注册链接</a>
	<div class="registerLink" id="registerLink"></div>
</div>

<script type="text/javascript">
	function build(){
		var realname = '&realname=' + $('#realname').val();
		var smacc = '&smacc=' + $('#smacc').val();
		var mobile = '&mobile=' + $('#mobile').val();
		$('.registerLink').html('http://newretaildeal.me/account/register.html?'+realname+smacc+mobile);
	}
	
</script>
</body>
</html>