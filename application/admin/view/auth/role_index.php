{include file="public__meta"}
<title>自定义表单详细列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 角色管理 <span class="c-gray en">&gt;</span> 角色详情列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><!-- <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> --> <a class="btn btn-primary radius" data-title="添加角色" data-href="{:url('admin/Auth/role_create')}" onclick="layer_full('添加角色','{:url('admin/Auth/role_create')}')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a></span> <span class="r">共有角色：<strong></strong> 条</span> </div>
	<div id="xuanzhong"></div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="25">ID</th>
					<th>角色名称</th>
					<th>角色描述</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			
			<tbody>
			{volist name="list" id="vo"}
				<tr class="text-c">
					<td><input type="checkbox" name="id" value="{$vo.id}"></td>
					<td>{$vo.id}</td>
					<td>{$vo.title}</td>
					<td>{$vo.discription}</td>
					<td>
						<a style="text-decoration:none" class="ml-5" onClick="layer_full('编辑','{:url('admin/Auth/role_edit',['id'=>$vo.id])}')" href="javascript:{:url('admin/Auth/role_edit',['id'=>$vo.id])};" title="编辑"><i class="Hui-iconfont">编辑</i></a>
					</td>
				</tr>
			{/volist}
			</tbody>
		</table>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"></div>
</div>
{include file="public__footer"}
</body>
</html>