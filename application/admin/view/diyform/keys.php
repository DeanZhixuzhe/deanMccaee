{include file="public__meta"}

<title>字段管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="{:url('admin/Diyform/saveKeys')}">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="30">ID</th>
					<th width="100">字段</th>
					<th width="150">字段名</th>
					<th width="50">字段类型</th>
					<th width="30">字段状态</th>
					<th width="30">是否为空</th>
					<th width="20">排序</th>
					<th width="120">默认值</th>
				</tr>
			</thead>
			<tbody>{volist name="list.diyformkeys" id="vo" empty="还未添加字段"}
				<tr class="text-c">
					<input type="hidden" value="{$vo.id}" id="id" name="id[]">
					<td></td>
					<td>{$vo.id}</td>
					<td><input type="text" class="input-text disabled" value="{$vo.keys_name}" placeholder="" id="keys_name" name="keys_name[]"></td>
					<td><input type="text" class="input-text" value="{$vo.keys_label}" placeholder="" id="keys_label" name="keys_label[]"></td>
					<td>
						<select id="keys_type" name="keys_type[]" class="select">
							<option value="text" {eq name="$vo.keys_type" value="text"}selected{/eq}>单行文本</option>
							<option value="textarea" {eq name="$vo.keys_type" value="textarea"}selected{/eq}>多行文本</option>
							<option value="editor" {eq name="$vo.keys_type" value="editor"}selected{/eq}>HTML文本</option>
							<option value="number" {eq name="$vo.keys_type" value="number"}selected{/eq}>数字</option>
							<option value="select" {eq name="$vo.keys_type" value="select"}selected{/eq}>下拉框</option>
							<option value="radio" {eq name="$vo.keys_type" value="radio"}selected{/eq}>单选</option>
							<option value="checkbox" {eq name="$vo.keys_type" value="checkbox"}selected{/eq}>多选</option>
							<option value="image" {eq name="$vo.keys_type" value="image"}selected{/eq}>图片</option>
							<option value="file" {eq name="$vo.keys_type" value="file"}selected{/eq}>附件</option>
							<option value="date" {eq name="$vo.keys_type" value="date"}selected{/eq}>日期</option>
						</select>
					</td>
					<td>
						<select class="select" name="status[]">
							<option value="1" {if condition="$vo.status == '正常'"}selected{/if}>正常</option>
							<option value="0" {if condition="$vo.status == '禁用'"}selected{/if}>禁用</option>
						</select>
					</td>
					<td>
						<select class="select" name="isnull[]">
							<option value="0" {eq name="$vo.isnull" value="否"}selected{/eq}>否</option>
							<option value="1" {eq name="$vo.isnull" value="是"}selected{/eq}>是</option>
						</select>
					</td>
					<td><input type="text" class="input-text" name="listorder[]" value="{$vo.listorder}"></td>
					<td><input type="text" class="input-text" value="{$vo.default}" placeholder="" id="default" name="default[]"></td>
				</tr>{/volist}
			</tbody>
		</table>
				
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