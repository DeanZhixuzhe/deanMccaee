<!DOCTYPE HTML>
<html>
<head>
{include file="public__meta"}
<title></title>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="{block name='action'}{/block}">
	{block name="form"}{/block}
		<input type="hidden" name="__token__" value="{$Request.token}">
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
{include file="public__footer"}
</body>
</html>