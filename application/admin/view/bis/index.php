<!--包含头部文件-->
{include file="public__header" /}
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 商户列表 </nav>
<div class="page-container">


  <div class="mt-20">
	<table class="table table-border table-bordered table-bg table-hover table-sort">
	  <thead>
	  <tr class="text-c">
		<th width="80">ID</th>
		<th width="100">商户名称</th>
		<th width="30">法人</th>
		<th width="150">联系电话</th>
		<th width="60">申请时间</th>
		<th width="60">状态</th>
		<th width="100">操作</th>
	  </tr>
	  </thead>
	  <tbody>
	  {volist name="bis" id="vo"}
	  <tr class="text-c">
		<td>{$vo.id}</td>
		<td>{$vo.name}</td>
		<td class="text-c">{$vo.faren}</td>
		<td class="text-c">{$vo.faren_tel}</td>
		<td>{$vo.create_time|date="Y-m-d H:i",###}</td>
		<td class="td-status">{$vo.status|status}</td>
		<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="o2o_edit('商户入驻详情数据','{:url('bis/detail', ['id'=>$vo.id])}')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="o2o_del('{:url('bis/status', ['id'=>$vo.id, 'status'=>-1])}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a> <a style="text-decoration:none" class="ml-5"  href="{:url('bis/status',['id'=>$vo.id, 'status'=>2])}" title="不通过"><i class="Hui-iconfont">不通过</i></a></td>
	  </tr>
	  {/volist}

	  </tbody>
	</table>
  </div>
  {:pagination($bis)}

  <!--包含头部文件-->
  {include file="public__footer" /}
