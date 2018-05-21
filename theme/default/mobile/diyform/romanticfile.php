<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>浪漫档案表 - {$cfg.webname}</title>
<meta name="description" content="" />
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
<link rel="stylesheet" type="text/css" href="__STATIC__/libs/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/libs/bootstrap/datetimepicker/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="__STATIC__/libs/bootstrap/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<style type="text/css">
/* yellow_button */
.yellow_button{border:none; overflow:hidden; display:block; text-align:center;color:#fff;background-position:0 0; margin: 20px auto;}
#registsubmit.disabled{background-position:0 -36px;cursor:default!important;}
.red{color:#ff0000;font-family:"宋体";font-weight:normal;}
/* formbox */
#formbox{padding:20px; margin: 20px auto; max-width: 880px; border: 1px solid #D1D1D1;}
#formbox h3{font-size:16px;height:32px;color:#3366cc;font-weight:800;border-bottom:solid 1px #D1D1D1;margin:20px 0;padding:0 10px; clear: both; text-align: center;}
.toplogo h1{text-align:center; color: #FF6A6A; font-size: 28px; font-style: normal;}
.toplogo p{margin: 15px 0; font-size: 16px; line-height: 28px;}
.form-group .control-label{margin-bottom: 5px;}
</style>
</head>

<body>
<div id="formbox">
	<div class="toplogo">
    	<h1>TheOne浪漫档案</h1>
    	<p class="miaoshu">打造个性化的完美浪漫需要我们共同创造，为了让您的浪漫计划尽善尽美不留遗憾，请在下面完整记录你们爱情的点点滴滴，我们专业的策划师将根据你们的情况和意见，量身策划出专属你们的独特记忆，The One浪漫策划祝你们百年好合，天长地久！</p>
  	</div>
	<form id="formpersonal" class="form-horizontal" method="post" action="{:url('index/Diyform/save')}">
	<div class="form">
		<h3>身份篇</h3>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你的名字：</label>
			<div class="col-sm-7">
				<input type="text" id="youname" name="youname" class="form-control" tabindex="1" />
				<div id="youname_error"></div>
				<label id="youname_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta的名字：</label>
			<div class="col-sm-7">
				<input type="text" id="hename" name="hename" class="form-control" tabindex="1" />
				<div id="hename_error"></div>
				<label id="hename_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你的年龄：</label>
			<div class="col-sm-7">
				<input type="text" id="youage" name="youage" class="form-control" tabindex="1" />
				<div id="youage_error"></div>
				<label id="youage_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta的年龄：</label>
			<div class="col-sm-7">
				<input type="text" id="heage" name="heage" class="form-control" tabindex="1" />
				<div id="heage_error"></div>
				<label id="heage_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你的职业：</label>
			<div class="col-sm-7">
				<input type="text" id="youprofession" name="youprofession" class="form-control" tabindex="1" />
				<div id="youprofession_error"></div>
				<label id="youprofession_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">Ta的职业：</label>
			<div class="col-sm-7">
				<input type="text" id="heprofession" name="heprofession" class="form-control" tabindex="1" />
				<div id="heprofession_error"></div>
				<label id="heprofession_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你的电话：</label>
			<div class="col-sm-7">
				<input type="text" id="youphone" name="youphone" class="form-control" tabindex="1" />
				<div id="youphone_error"></div>
				<label id="youphone_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">Ta的电话：</label>
			<div class="col-sm-7">
				<input type="text" id="hephone" name="hephone" class="form-control" tabindex="1" />
				<div id="hephone_error"></div>
				<label id="hephone_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你的QQ/微信：</label>
			<div class="col-sm-7">
				<input type="text" id="youqq" name="youqq" class="form-control" tabindex="1" />
				<div id="youqq_error"></div>
				<label id="youqq_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">Ta的QQ/微信：</label>
			<div class="col-sm-7">
				<input type="text" id="heqq" name="heqq" class="form-control" tabindex="1" />
				<div id="heqq_error"></div>
				<label id="heqq_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">你的住址：</label>
			<div class="col-sm-7">
				<input type="text" id="youaddress" name="youaddress" class="form-control" tabindex="1" />
				<div id="youaddress_error"></div>
				<label id="youaddress_succeed" class="blank"></label>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">Ta的住址：</label>
			<div class="col-sm-7">
				<input type="text" id="headdress" name="headdress" class="form-control" tabindex="1" />
				<div id="headdress_error"></div>
				<label id="headdress_succeed" class="blank"></label>
			</div>
		</div>

		<h3>个性篇</h3>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta的兴趣爱好：</label>
			<div class="col-sm-7">
				<input type="text" id="hehobby" name="hehobby" class="form-control" tabindex="1" />
				<div id="hehobby_error"></div>
				<label id="hehobby_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>你们的共同爱好：</label>
			<div class="col-sm-7">
				<input type="text" id="commonhobby" name="commonhobby" class="form-control" tabindex="1" />
				<div id="commonhobby_error"></div>
				<label id="commonhobby_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">Ta的特长：</label>
			<div class="col-sm-7">
				<input type="text" id="hespeciality" name="hespeciality" class="form-control" tabindex="1" />
				<div id="hespeciality_error"></div>
				<label id="hespeciality_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label">你的特长：</label>
			<div class="col-sm-7">
				<input type="text" id="youspeciality" name="youspeciality" class="form-control" tabindex="1" />
				<div id="youspeciality_error"></div>
				<label id="youspeciality_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的鲜花：</label>
			<div class="col-sm-7">
				<input type="text" id="flower" name="flower" class="form-control" tabindex="1" />
				<div id="flower_error"></div>
				<label id="flower_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的颜色：</label>
			<div class="col-sm-7">
				<input type="text" id="color" name="color" class="form-control" tabindex="1" />
				<div id="color_error"></div>
				<label id="color_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的风格：</label>
			<div class="col-sm-7">
				<input type="text" id="style" name="style" class="form-control" tabindex="1" />
				<div id="style_error"></div>
				<label id="style_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的明星：</label>
			<div class="col-sm-7">
				<input type="text" id="star" name="star" class="form-control" tabindex="1" />
				<div id="star_error"></div>
				<label id="star_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的歌曲：</label>
			<div class="col-sm-7">
				<input type="text" id="song" name="song" class="form-control" tabindex="1" />
				<div id="song_error"></div>
				<label id="song_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-5 control-label"><span class="red">*</span>Ta喜欢的电影：</label>
			<div class="col-sm-7">
				<input type="text" id="movie" name="movie" class="form-control" tabindex="1" />
				<div id="movie_error"></div>
				<label id="movie_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label"><span class="red">*</span>Ta喜欢的卡通人物：</label>
			<div class="col-sm-8">
				<input type="text" id="cartoon" name="cartoon" class="form-control" tabindex="1" />
				<div id="cartoon_error"></div>
				<label id="cartoon_succeed" class="blank"></label>
				<span class="clear"></span>
			</div>
		</div>
		
		<h3>爱情篇</h3>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>你们的相识经历？对对方的第一印象是什么？</label>
			<div>
				<input type="text" id="experience" name="experience" class="form-control" tabindex="1" />
				<label id="experience_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="experience_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>恋爱中最难忘/感动/有特别意义/值得纪念的事，或有纪念意义的礼物。</label>
			<div>
				<input type="text" id="memorable" name="memorable" class="form-control" tabindex="1" />
				<label id="memorable_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="memorable_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>两人一起去旅游过的城市有哪些，有照片或视频吗？</label>
			<div>
				<input type="text" id="travel" name="travel" class="form-control" tabindex="1" />
				<label id="travel_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="travel_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>Ta最想去的地方是那里？</label>
			<div>
				<input type="text" id="place" name="place" class="form-control" tabindex="1" />
				<label id="place_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="place_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>Ta最想实现的三个心愿是什么？</label>
			<div>
				<input type="text" id="wish" name="wish" class="form-control" tabindex="1" />
				<label id="wish_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="wish_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>Ta最想收到的礼物是什么？</label>
			<div>
				<input type="text" id="gift" name="gift" class="form-control" tabindex="1" />
				<label id="gift_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="gift_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>你们的照片有50张以上吗？（包括个人、合照）</label>
			<div>
				<input type="text" id="photofifty" name="photofifty" class="form-control" tabindex="1" />
				<label id="photo50_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="photo50_error"></div>
			</div>
		</div>

		<h3>浪漫计划篇</h3>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您的浪漫主题是什么？</label>
			<div>
				<label class="radio-inline"><input tabindex="13" name="romantictheme" runant="server" type="radio" value="求婚" />求婚</label>
				<label class="radio-inline"><input tabindex="13" name="romantictheme" runant="server" type="radio" value="表白" />表白</label>
				<label class="radio-inline"><input tabindex="13" name="romantictheme" runant="server" type="radio" value="生日惊喜" />生日惊喜</label>
				<label class="radio-inline"><input tabindex="13" name="romantictheme" runant="server" type="radio" value="纪念日浪漫" />纪念日浪漫</label>
				<label class="radio-inline"><input tabindex="13" name="romantictheme" runant="server" type="radio" value="感情挽回" />感情挽回</label>
				<input id="romantictheme" type="hidden" value="" />
				<label id="romantictheme_succeed" class="blank"></label>
				<span class="clear"></span>
				<label id="romantictheme_error"></label>
			</div>
		</div><!--item end-->
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您打算向女友求婚的直接原因是</label>
			<!-- <label id="cause_succeed" class="blank"></label> -->
			<div class="radio">
				<label><input tabindex="13" name="cause" runant="server" type="radio" value="A、自己早就想好的，要给女友留下一段特别美好的回忆" />A、自己早就想好的，要给女友留下一段特别美好的回忆</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="cause" runant="server" type="radio" value="B、女友一直要求，要有求婚的过程" />B、女友一直要求，要有求婚的过程</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="cause" runant="server" type="radio" value="C、感觉生活中亏欠对方，解决某种问题" />C、感觉生活中亏欠对方，解决某种问题</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="cause" runant="server" type="radio" value="D、自发的，结婚前要有这么一个形式" />D、自发的，结婚前要有这么一个形式</label>
			</div>
				<input id="cause" type="hidden" value="" />
				<span class="clear"></span>
				<div id="cause_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您获取求婚策划的相关信息来源于</label>
			<div>
				<label class="radio-inline">A、搜索引擎：</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="百度搜索" />百度</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="谷歌搜索" />谷歌</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="360搜索" />360</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="搜狗搜索" />搜狗</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="其他搜索" />其他搜索</label>
			</div>
			<div>
				<label class="radio-inline">B、视频网站：</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="优酷视频" />优酷</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="土豆视频" />土豆</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="腾讯视频" />腾讯</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="爱奇艺视频" />爱奇艺</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="其他视频" />其他视频</label>
			</div>
			<div>
				<label class="radio-inline">C、分类信息网：</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="58同城" />58同城</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="赶集网" />赶集</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="其他分类" />其他分类</label>
			</div>
			<div>
				<label class="radio-inline">D、其他途径：</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="微信" />微信</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="微博" />微博</label><label class="radio-inline"><input tabindex="13" name="infosource" runant="server" type="radio" value="朋友介绍" />朋友介绍</label>
			</div>
			<input id="infosource" type="hidden" value="" />
			<span class="clear"></span>
			<div id="infosource_error"></div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您准备度过浪漫时刻的城市：</label>
			<input type="text" id="romanticcity" name="romanticcity" class="form-control" tabindex="1" />
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您寻找浪漫策划公司的工具</label>
			<div>
				<label class="radio-inline"><input tabindex="13" name="romantictool" runant="server" type="radio" value="电脑" />A、电脑</label>
				<label class="radio-inline"><input tabindex="13" name="romantictool" runant="server" type="radio" value="平板" />B、平板</label>
				<label class="radio-inline"><input tabindex="13" name="romantictool" runant="server" type="radio" value="手机" />C、手机</label>
				<input id="romantictool" type="hidden" value="" />
				<label id="romantictool_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="romantictool_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您最为期待的求婚场景是</label>
			<!-- <label id="proposedscenario_succeed" class="blank"></label> -->
			<div class="radio">
				<label><input tabindex="13" name="proposedscenario" runant="server" type="radio" value="A、只有我和她在场的私人场所" />A、只有我和她在场的私人场所</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="proposedscenario" runant="server" type="radio" value="B、有很多好友同事和亲人在场的任何场所" />B、有很多好友同事和亲人在场的任何场所</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="proposedscenario" runant="server" type="radio" value="C、户外广场众人见证的场景" />C、户外广场众人见证的场景</label>
			</div>
				<input id="proposedscenario" type="hidden" value="" />
				<div id="proposedscenario_error"></div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您对自己的求婚方案和求婚场景的要求是</label>
			<!-- <label id="proposerequire_succeed" class="blank"></label> -->
			<div class="radio">
				<label><input tabindex="13" name="proposerequire" runant="server" type="radio" value="A、要和别人不一样的，DIY求婚方案和场景" />A、要和别人不一样的，DIY求婚方案和场景</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="proposerequire" runant="server" type="radio" value="B、没有什么概念，简单易操作即可" />B、没有什么概念，简单易操作即可</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="proposerequire" runant="server" type="radio" value="C、选择标准的求婚策划方案和方式" />C、选择标准的求婚策划方案和方式</label>
			</div>
			<div class="radio">
				<label><input tabindex="13" name="proposerequire" runant="server" type="radio" value="D、自己有想法希望得到专业的完善和执行" />D、自己有想法希望得到专业的完善和执行</label>
			</div>
				<input id="proposerequire" type="hidden" value="" />
				<div id="proposerequire_error"></div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>您喜欢的求婚形式偏重于哪一类（可多选）</label>
			<div>
				<label class="checkbox-inline"><input tabindex="13" name="proposalform" runant="server" type="checkbox" value="A、创意型" />A、创意型</label>
				<label class="checkbox-inline"><input tabindex="13" name="proposalform" runant="server" type="checkbox" value="B、精巧型" />B、精巧型</label>
				<label class="checkbox-inline"><input tabindex="13" name="proposalform" runant="server" type="checkbox" value="C、惊喜型" />C、惊喜型</label>
				<label class="checkbox-inline"><input tabindex="13" name="proposalform" runant="server" type="checkbox" value="D、感人型" />D、感人型</label>
				<label class="checkbox-inline"><input tabindex="13" name="proposalform" runant="server" type="checkbox" value="E、场景型" />E、场景型</label>
				<input id="proposalform" type="hidden" value="" />
				<label id="proposalform_succeed" class="blank"></label>
				<span class="clear"></span>
				<div id="proposalform_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>自己平时是否喜欢为她做过一些浪漫的事情</label>
			<!-- <label id="isromanticmatter_succeed" class="blank"></label> -->
			<div>
				<label class="radio-inline"><input tabindex="13" name="isromanticmatter" runant="server" type="radio" value="A、平时工作忙，很少" />A、平时工作忙，很少</label>
				<label class="radio-inline"><input tabindex="13" name="isromanticmatter" runant="server" type="radio" value="B、偶尔的时候做过一些" />B、偶尔的时候做过一些</label>
				<label class="radio-inline"><input tabindex="13" name="isromanticmatter" runant="server" type="radio" value="C、每月都会给对方一些小惊喜" />C、每月都会给对方一些小惊喜</label>
				<label class="radio-inline"><input tabindex="13" name="isromanticmatter" runant="server" type="radio" value="D、从来没有为她做过" />D、从来没有为她做过</label>
				<input id="isromanticmatter" type="hidden" value="" />
				<span class="clear"></span>
				<div id="isromanticmatter_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>对于整个求婚策划仪式，您的预算经费大致是</label>
			<div>
				<label class="radio-inline"><input tabindex="13" name="proposebudget" runant="server" type="radio" value="A、一万元以内" />A、一万元以内</label>
				<label class="radio-inline"><input tabindex="13" name="proposebudget" runant="server" type="radio" value="B、1万-3万" />B、1万-3万</label>
				<label class="radio-inline"><input tabindex="13" name="proposebudget" runant="server" type="radio" value="C、3万-5万" />C、3万-5万</label>
				<label class="radio-inline"><input tabindex="13" name="proposebudget" runant="server" type="radio" value="D、五万元以上" />D、五万元以上</label>
				<input id="proposebudget" type="hidden" value="" />
				<!-- <label id="proposebudget_succeed" class="blank"></label> -->
				<span class="clear"></span>
				<div id="proposebudget_error"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><span class="red">*</span>对于求婚执行的具体时间您打算定在什么时间：</label>
			<div>
				<input type="text" id="activitytime" name="activitytime" class="form-control activitytime" tabindex="1" />
				<div id="proposetime_error"></div>
				<label id="proposetime_succeed" class="blank"></label>
			</div>
		</div>
		<div class="yellow_button">
			<input type="hidden" name="diyform_id" value="{$data.id}">
			<input type="submit" name="submit" class="btn btn-primary btn-lg" value="提交浪漫档案表" tabindex="8" />
		</div>
	</div>
	</form>
</div><!--formbox end-->
<script type="text/javascript">
$().ready(function(){
	$(".activitytime").datetimepicker({
		format:'yyyy-mm-dd',
		autoclose:'true',
		minView:'2',
		language:'zh-CN'
    });
});
</script>
<script type="text/javascript" src="/static/js/Validate.js"></script>
<script type="text/javascript" src="/static/js/Validate.form.js"></script>
</body>
</html>