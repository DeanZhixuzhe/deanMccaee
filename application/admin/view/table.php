<!DOCTYPE HTML>
<html>
<head>
{include file="public__meta"}
<title></title>
</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> {block name="title"}{/block}管理 <span class="c-gray en">&gt;</span> {block name="title"}{/block}列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加{block name="title"}{/block}" data-href="{$urls['create']}" onclick="layer_full('添加{block name="title"}{/block}','{$urls['create']}')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加{block name="title"}{/block}</a></span> <span class="r">共有{block name="title"}{/block}：<strong></strong> 条</span> </div>
	<div id="xuanzhong"></div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
				{block name="thead"}
					
				{/block}
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
			{volist name="list" id="vo"}
				<tr class="text-c">
				{block name="tbody"}
					
				{/block}
					<td>
					{block name="operation"}{/block}
						<a style="text-decoration:none" class="ml-5" onClick="layer_full('编辑','{$urls['edit']}?id={$vo.id}')" href="javascript:{$urls['edit']}?id={$vo.id};" title="编辑"><i class="Hui-iconfont">编辑</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="layer_full('删除','{$urls['delete']}?id={$vo.id}')" href="javascript:{$urls['delete']}?id={$vo.id};" title="删除"><i class="Hui-iconfont">删除</i></a>
					</td>
				</tr>
			{/volist}
			</tbody>
		</table>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">{$list->render()}</div>
</div>
{include file="public__footer"}
</body>
</html>