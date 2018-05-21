{extend name="table"}
{block name="nav"}
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 会员详情列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
{/block}

{block name="total"}
<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加会员" data-href="{:url('admin/Member/add')}" onclick="layer_full('添加表单','{:url('admin/Member/add')}')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加会员</a></span> <span class="r">共有会员：<strong></strong> 条</span> </div>
{/block}

{block name="thead"}
<th>ID</th>
<th>手机号</th>
<th>昵称</th>
<th>性别</th>
<th>邮箱</th>
<th>积分</th>
<th>状态</th>
{/block}
{block name="tbody"}
<td>{$vo.id}</td>
<td>{$vo.mobile}</td>
<td>{$vo.nickname}</td>
<td>{$vo.gender}</td>
<td>{$vo.email}</td>
<td>{$vo.scores}</td>
<td>{$vo.status}</td>
{/block}
{block name="controller"}Member{/block}