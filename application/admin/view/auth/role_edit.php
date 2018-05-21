{extend name="form"}
{block name="action"}{:url('admin/Auth/role_update')}{/block}
{block name="form"}
		<input type="hidden" name="id" value="{$data.id}">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色名称</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.title}" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色描述</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.discription}" placeholder="" id="discription" name="discription">
			</div>
		</div>
{/block}