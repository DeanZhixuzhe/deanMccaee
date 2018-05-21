<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$cfg.title} - {$cfg.webname}</title>
<meta name="keywords" content="{$cfg.keywords}" />
<meta name="description" content="{$cfg.description}" />
<link rel="canonical" href="http://www.1314theone.com/">
{include file="./theme/default/pc/meta.php"}
</head>
<body>
{include file="./theme/default/pc/header.php"/}
<a href="http://www.mccaee.com/" target="_blank">官方网站</a>
<a href="http://www.baoyisc.com/" target="_blank">积分商城</a>

<a href="{:url('index/Member/build')}" target="_blank">生成注册链接</a>
<div>

	<a href="{:url('index/Tools/incomeassessment',['title' => '原创书法180327',])}" target="_blank">投资收益模拟器</a>
</div>
{include file="./theme/default/pc/footer.php"/}
</body>
</html>