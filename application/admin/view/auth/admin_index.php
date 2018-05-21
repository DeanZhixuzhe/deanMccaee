{extend name="table"}
{block name="title"}管理员{/block}
{block name="operation"}
<a style="text-decoration:none" class="ml-5" onClick="layer_full('授权','{:url('admin/Auth/admin_impower',['id' => $vo.id])}')" href="javascript:{:url('admin/Auth/admin_impower',['id' => $vo.id])};" title="授权"><i class="Hui-iconfont">授权</i></a>
{/block}
{block name="thead"}
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="25">ID</th>
					<th>昵称</th>
					<th>邮箱</th>
{/block}
{block name="tbody"}
					<td><input type="checkbox" name="id" value="{$vo.id}"></td>
					<td>{$vo.id}</td>
					<td>{$vo.nickname}</td>
					<td>{$vo.email}</td>
{/block}
