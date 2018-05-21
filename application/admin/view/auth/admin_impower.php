{extend name="form"}
{block name="action"}{:url('admin/Auth/admin_impowersave')}{/block}
{block name="form"}
<input type="hidden" name="admin_id" value="{$data.id}">
{volist name="list" id="vo"}
<label><input type="checkbox" name="role_id[]" value="{$vo.id}" {volist name="roles" id="v"}{if condition="$vo.id == $v.id"}checked{/if}{/volist}>{$vo.title}</label>
{/volist}
{/block}
