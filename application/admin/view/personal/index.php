{include file="public__meta"}

<title>个人资料</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="{:url('admin/Personal/save')}">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户名</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text disabled" value="{$data.username}" placeholder="" id="title" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>昵称</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{$data.nickname}" placeholder="" id="shorttitle" name="shorttitle">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮件</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{$data.email}" placeholder="" id="writer" name="email">
			</div>
		</div>
		<input type="hidden" name="id" value="{$data.id}">
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
	// //表单验证
	// $("#form1-article-add").validate({
	// 	rules:{
	// 		articletitle:{
	// 			required:true,
	// 		},
	// 		articletitle2:{
	// 			required:true,
	// 		},
	// 		articlecolumn:{
	// 			required:true,
	// 		},
	// 		articletype:{
	// 			required:true,
	// 		},
	// 		articlesort:{
	// 			required:true,
	// 		},
	// 		keywords:{
	// 			required:true,
	// 		},
	// 		abstract:{
	// 			required:true,
	// 		},
	// 		author:{
	// 			required:true,
	// 		},
	// 		sources:{
	// 			required:true,
	// 		},
	// 		allowcomments:{
	// 			required:true,
	// 		},
	// 		commentdatemin:{
	// 			required:true,
	// 		},
	// 		commentdatemax:{
	// 			required:true,
	// 		},

	// 	},
	// 	onkeyup:false,
	// 	focusCleanup:true,
	// 	success:"valid",
	// 	submitHandler:function(form){
	// 		//$(form).ajaxSubmit();
	// 		var index = parent.layer.getFrameIndex(window.name);
	// 		//parent.$('.btn-refresh').click();
	// 		parent.layer.close(index);
	// 	}
	// });
	
	
	var ue = UE.getEditor('editorContent');
	
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>