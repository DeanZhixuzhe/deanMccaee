{extend name="form"}
{block name="action"}{:url('admin/System/sysconfig_save')}{/block}
{block name="form"}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.0.value}" placeholder="" id="webname" name="webname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>域名</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.4.value}" placeholder="" id="domain" name="domain">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站标题</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.1.value}" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站关键词</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.2.value}" placeholder="" id="keywords" name="keywords">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站描述</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.3.value}" placeholder="" id="description" name="description">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>版权信息</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.5.value}" placeholder="" id="copyright" name="copyright">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>备案信息</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.6.value}" placeholder="" id="beian" name="beian">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文档默认点击数</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.7.value}" placeholder="" id="defaultclick" name="defaultclick">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站风格</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="{$list.8.value}" placeholder="" id="style" name="style">
			</div>
		</div>
{/block}