{include file="public__meta"}

<title>表单详情</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="{:url('admin/Diyform/saveKeys')}">
		{volist name="data" id="vo"}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>{$vo.diyformkeys.keys_label}</label>
			{switch name=$vo.diyformkeys.keys_type}
			{case value="textarea"}
			<div class="formControls col-xs-8 col-sm-9">
				<input type="textarea" class="textarea" value="{$vo.content}" placeholder="" id="{$vo.diyformkeys.keys_name}" name="{$vo.diyformkeys.keys_name}">
			</div>
			{/case}
			{case value="checkbox"}
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{$vo.content}" placeholder="" id="{$vo.diyformkeys.keys_name}" name="{$vo.diyformkeys.keys_name}">
			</div>
			{/case}
			{case value="html|editor"}
			<div class="formControls col-xs-8 col-sm-9">
				<input type="textarea" class="textarea" value="{$vo.body}" placeholder="" id="{$vo.diyformkeys.keys_name}" name="{$vo.diyformkeys.keys_name}">
			</div>
			{/case}
			{default/}
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{$vo.content}" placeholder="" id="{$vo.diyformkeys.keys_name}" name="{$vo.diyformkeys.keys_name}">
			</div>
			{/switch}
		</div>
		{/volist}
		
		<input type="hidden" name="diyform_id" value="{$data.0.vid}">
		<input type="hidden" name="__token__" value="{$Request.token}">
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius disabled" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

{include file="public__footer"}

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
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