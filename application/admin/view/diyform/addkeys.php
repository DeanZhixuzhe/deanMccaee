{include file="public__meta"}

<title>添加管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="{:url('admin/Diyform/saveKeys')}">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>字段名</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="keys_name" name="keys_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>字段提示</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="keys_label" name="keys_label">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>字段类型</label>
			<div class="formControls col-xs-8 col-sm-9">
				<label><input type="radio" name="keys_type" value="text" checked>单行文本</label>
				<label><input type="radio" name="keys_type" value="textarea">多行文本</label>
				<label><input type="radio" name="keys_type" value="editor">HTML文本</label>
				<label><input type="radio" name="keys_type" value="number">数字</label>
				<label><input type="radio" name="keys_type" value="select">下拉框</label>
				<label><input type="radio" name="keys_type" value="radio">单选</label>
				<label><input type="radio" name="keys_type" value="checkbox">多选</label>
				<label><input type="radio" name="keys_type" value="image">图片</label>
				<label><input type="radio" name="keys_type" value="file">附件</label>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否允许为空</label>
			<div class="formControls col-xs-8 col-sm-9">
				<label><input type="radio" name="isnull" value="0" checked>不允许</label>
				<label><input type="radio" name="isnull" value="1">允许</label>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="listorder" name="listorder">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>默认值</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea class="textarea" value="" placeholder="默认值|错误提示" id="default" name="default"></textarea>
			</div>
		</div>
		<input type="hidden" name="diyform_id" value="{$id}">
		<input type="hidden" name="__token__" value="{$Request.token}">
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

{include file="public__footer"}

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__STATIC__/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
var SCOPE = {
   	'city_url' : "{:url('api/city/getCitysByParentId')}",
    'category_url' : "{:url('api/category/getCategoryByParentId')}",
	'uploadify_swf' : '__STATIC__/lib/uploadify/uploadify.swf',
	'image_upload' : "{:url('api/image/upload')}",
};
$(function(){
	
	var ue = UE.getEditor('editorContent');
	
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>