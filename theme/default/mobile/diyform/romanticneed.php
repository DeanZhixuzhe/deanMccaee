<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>专属定制求婚_免费求婚方案_求婚策划方案获取_浪漫求婚策划方案提供 - {$cfg.webname}</title>
<meta name="keywords" content="专属定制求婚,免费求婚方案,求婚策划方案,浪漫求婚策划方案">
<meta name="description" content="TheOne求婚策划公司提供免费求婚方案、求婚策划方案获取、浪漫求婚策划方案。">
{include file="./theme/tot/mobile/meta.php"}
<link rel="stylesheet" type="text/css" href="__STATIC__/libs/bootstrap/datetimepicker/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<div id="header_s">
    <div class="logo">
        <a href="{$Request.domain}/"><img src="__STATIC__/{$Think.config.template.style}/images/Logo_0101.png"></a>
    </div>
    <span>高端私人订制</span>
    <div class="nav">
        <div class="tit">导航 <span class="am-icon-caret-down"></span></div>
        <div class="con">
            <ul class="am-avg-sm-3">
                <li><a href="/">首页</a></li>
                <li><a href="/mall/">浪漫套餐</a></li>
                <li><a href="/proposal/case/">浪漫案例</a></li>
                <li><a href="/proposal/">求婚攻略</a></li>
                <li><a href="/proposal/plan/">求婚策划</a></li>
                <li><a href="/proposal/originality/">求婚创意</a></li>
                <li><a href="/proposal/mode/">求婚方式</a></li>
                <li><a href="/proposal/song/">求婚歌曲</a></li>
                <li><a href="/proposal/ring/">求婚戒指</a></li>
                <li><a href="/proposal/word/">求婚词</a></li>
                <li><a href="/proposal/kuaishan/">快闪求婚</a></li>
                <li><a href="/proposal/dianyingyuan/">电影院求婚</a></li>
                <li><a href="/proposal/ktv/">KTV求婚</a></li>
                <li><a href="/proposal/kafeiting/">咖啡厅求婚</a></li>
                <li><a href="/proposal/canting/">餐厅求婚</a></li>
            </ul>
        </div>
        <div class="head_mask"></div>
    </div>
</div>
<div class="body pt030">
	<form action="{:url('index/Diyform/save')}" method="post" class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">活动主题</label>
		<div class="col-sm-10">
			<label class="radio-inline"><input type="radio" name="theme" value="求婚">求婚</label>
			<label class="radio-inline"><input type="radio" name="theme" value="表白">表白</label>
			<label class="radio-inline"><input type="radio" name="theme" value="感情挽回">感情挽回</label>
			<label class="radio-inline"><input type="radio" name="theme" value="生日惊喜">生日惊喜</label>
			<label class="radio-inline"><input type="radio" name="theme" value="纪念日惊喜">纪念日惊喜</label>
			<label class="radio-inline"><input type="radio" name="theme" value="其他主题">其他</label>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">活动城市</label>
		<div class="col-sm-4"><input type="text" class="form-control" name="activityarea" value="" placeholder="请填写您举行浪漫活动的城市"></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">活动时间</label>
		<div class="col-sm-4" id=""><input type="text" class="form-control activitytime" name="activitytime" value="" placeholder="请填写您的浪漫活动时间"></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">您的想法</label>
		<div class="col-sm-8"><textarea class="form-control" rows="3" name="youridea" placeholder="请填写您对浪漫活动的具体想法"></textarea></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">您的姓名</label>
		<div class="col-sm-4"><input type="text" class="form-control" name="yourname" value="" placeholder="请填写您的姓名"></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">手机号码</label>
		<div class="col-sm-4"><input type="number" class="form-control" id="mobile" name="mobile" value="" placeholder="请填写您的手机"></div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">验证码</label>
		<div class="col-sm-2"><input type="text" class="form-control" name="code" value=""></div>
		<div class="col-sm-2"><input type="button" class="form-control" name="getCode" id="getCode" value="获取验证码" disabled="disabled"></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="diyform_id" value="{$data.id}">
			<input type="submit" class="btn btn-default" value="提 交">
		</div>
	</div>
	</form>
</div>
<script>
$().ready(function() {
    // $("#commentForm").validate({
    //     submitHandler:function(form){
    //     	alert("tijiaoshijian");
    //     	alert($("form").serialize());
    //         $.post("{:url('index/Account/reg')}",$("form").serialize(),function(data){
    //             alert(data);
    //         },json);
    //     },
    //     debug:true,
    //     errorElement:"span",
    //     errorPlacement: function(error, element) {
    //         $(element).closest("p").append(error);  //
    //     },
    // });
    $(".activitytime").datetimepicker({
    	format:'yyyy-mm-dd',
    	autoclose:'true',
    	minView:'2',
    	language:'zh-CN'
    });
    $("#mobile").blur(function(){
        if (!$("#mobile").val().match(/^(((1[3|5|7|8][0-9]{1})|145|147|149)+\d{8})$/)) {
            $('#getCode').attr('disabled','disabled');
        }else {
            $('#getCode').removeAttr('disabled');
        }
    });
    var test = {
        node:null,
        count:60,
        start:function(){
            if(this.count > 0){
                this.node.value = this.count--+"秒后重发"
                var _this = this;
                setTimeout(function(){
                    _this.start();
                },1000);
            }else{
                this.node.removeAttribute("disabled");
                this.node.value = "获取验证码";
                this.count = 60;
            }
        },
        //初始化
        init:function(node){
            this.node = node;
            this.node.setAttribute("disabled",true);
            this.start();
        }
    };
    $("#getCode").click(function(){
        var mobile=$("#mobile").val();
        if (mobile.match(/^(((1[3|5|7|8][0-9]{1})|145|147|149)+\d{8})$/)) {
            $.get("{:url('account/Sms/send')}?action=getcode&mobile="+mobile); //数据库版本使用代码
            test.init(document.getElementById("getCode"));
        }
    });
});
</script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="__STATIC__/libs/jquery.validation/1.14.0/jquery.validate.js"></script>
<script src="__STATIC__/libs/jquery.validation/1.14.0/messages_cn.js"></script>
<script src="__STATIC__/libs/jquery.validation/1.14.0/additional-methods.js"></script>
{include file="./theme/tot/mobile/footer.php"}
</body>
</html>