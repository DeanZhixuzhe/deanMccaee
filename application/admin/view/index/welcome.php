<!DOCTYPE HTML>
<html>
<head>
{include file="public__meta"}
<title></title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">TheOne浪漫策划公司 <span class="f-14">v3.1</span></p>
	<p>登录次数：18 </p>
	<p>上次登录IP：222.35.131.79.1  上次登录时间：2018-01-24 18:46:20</p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">信息统计</th>
			</tr>
			<tr class="text-c">
				<th>统计</th>
				<th>资讯库</th>
				<th>图片库</th>
				<th>产品库</th>
				<th>用户</th>
				<th>管理员</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>总数</td>
				<td>92</td>
				<td>9</td>
				<td>0</td>
				<td>8</td>
				<td>20</td>
			</tr>
			<tr class="text-c">
				<td>今日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>昨日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本周</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本月</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName">{php}$os = explode(" ", php_uname());if('/'==DIRECTORY_SEPARATOR ){echo $os[1];}else{echo $os[2];}{/php}</span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td>{php}if('/'==DIRECTORY_SEPARATOR){echo $_SERVER['SERVER_ADDR'];}else{echo @gethostbyname($_SERVER['SERVER_NAME']);}{/php}</td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td>{php}echo $_SERVER['SERVER_NAME'];{/php}</td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td>{php}echo $_SERVER['SERVER_PORT'];{/php}</td>
			</tr>
			<tr>
				<td>服务器IIS版本 </td>
				<td>{php}echo $_SERVER['SERVER_SOFTWARE'];{/php}</td>
			</tr>
			<tr>
				<td>本文件所在文件夹 </td>
				<td>{php}echo $_SERVER['DOCUMENT_ROOT']?str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']):str_replace('\\','/',dirname(__FILE__));{/php}</td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td>{php}echo $os[0];{/php} &nbsp;内核版本：{php} if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];}{/php}</td>
			</tr>
			<tr>
				<td>系统所在文件夹 </td>
				<td>C:\WINDOWS\system32</td>
			</tr>
			<tr>
				<td>服务器脚本超时时间 </td>
				<td>{php}echo get_cfg_var('max_execution_time');{/php}</td>
			</tr>
			<tr>
				<td>服务器的语言种类 </td>
				<td>{php}echo getenv("HTTP_ACCEPT_LANGUAGE");{/php}</td>
			</tr>
			<tr>
				<td>.NET Framework 版本 </td>
				<td>2.050727.3655</td>
			</tr>
			<tr>
				<td>服务器当前时间 </td>
				<td>{$Request.time|date='Y-m-d h:m:s',###}</td>
			</tr>
			<tr>
				<td>上传文件最大限制（upload_max_filesize） </td>
				<td>{php}echo get_cfg_var('upload_max_filesize');{/php}</td>
			</tr>
			<tr>
				<td>服务器上次启动到现在已运行 </td>
				<td>7210分钟</td>
			</tr>
			<tr>
				<td>POST方法提交最大限制（post_max_size） </td>
				<td>{php}echo get_cfg_var('post_max_size');{/php}</td>
			</tr>
			<tr>
				<td>GD库支持</td>
				<td>{php}$gd_info = @gd_info();echo $gd_info["GD Version"];{/php}</td>
			</tr>
			<tr>
				<td>CPU 总数 </td>
				<td>4</td>
			</tr>
			<tr>
				<td>CPU 类型 </td>
				<td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
			</tr>
			<tr>
				<td>虚拟内存 </td>
				<td>52480M</td>
			</tr>
			<tr>
				<td>当前程序占用内存 </td>
				<td>3.29M</td>
			</tr>
			<tr>
				<td>Asp.net所占内存 </td>
				<td>51.46M</td>
			</tr>
			<tr>
				<td>当前Session数量 </td>
				<td>8</td>
			</tr>
			<tr>
				<td>当前SessionID </td>
				<td>{$Request.header.phpsessid}</td>
			</tr>
			<tr>
				<td>当前系统用户名 </td>
				<td>NETWORK SERVICE</td>
			</tr>
		</tbody>
	</table>
</div>
{include file="public__footer"}
</body>
</html>