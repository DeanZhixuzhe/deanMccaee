{extend name="form"}
{block name="action"}{:url('admin/Member/save')}{/block}
{block name="form"}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户名</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.username}" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>昵称</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.nickname}" placeholder="" id="nickname" name="nickname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>性别</label>
			<div class="formControls col-xs-8 col-sm-6">
				<select class="select" name="gender">
					<option value="-1" {eq name="$data.gender" value="保密"}selected="selected"{/eq}>保密</option>
					<option value="0" {eq name="$data.gender" value="男"}selected="selected"{/eq}>男</option>
					<option value="1" {eq name="$data.gender" value="女"}selected="selected"{/eq}>女</option>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.email}" placeholder="" id="email" name="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>手机</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.mobile}" placeholder="" id="mobile" name="mobile">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>积分</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$data.scores}" placeholder="" id="scores" name="scores">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>状态</label>
			<div class="formControls col-xs-8 col-sm-6">
				<label><input type="radio" name="status" value="1" class="radio" {eq name="$data.status" value="正常"}checked{/eq}>正常</label>
				<label><input type="radio" name="status" value="0" class="radio" {eq name="$data.status" value="禁用"}checked{/eq}>禁用</label>
			</div>
		</div>
		<input type="hidden" name="id" value="{$data.id}">
{/block}