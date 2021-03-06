<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$data.arc.title} - {$cfg.webname}</title>
<meta name="keywords" content="{$data.arc.keywords}" />
<meta name="description" content="{$data.arc.description}" />
<link rel="canonical" href="{$cfg.domain}{$data.arctype.arcurl}">
{include file="./theme/tot/meta.php"}
</head>
<body>
{include file="./theme/tot/header.php"}
<div class="body">
	<div class="breadcrumb">{dede:field name='position'}{$data.arc.title runphp="yes"}
	global $dsql;
	$row = $dsql->GetOne("SELECT keywords FROM dede_archives WHERE title LIKE '%@me%'");
	$arr = [
		'地区' => [
			'北京','上海','重庆','天津','成都','昆明','丽江','贵阳','广州','深圳','南宁','海口','三亚','杭州','南京','苏州','合肥','济南','青岛','福州','厦门','南昌','长沙','武汉','郑州','太原','石家庄','沈阳','大连','长春','哈尔滨','西安','香港','巴黎','马尔代夫','巴厘岛','苏梅岛','塞班岛','普吉岛'
		],
		'场景' => [
			'快闪','电影院','咖啡','KTV','酒吧','酒店','餐厅','商场','广场','海边','校园','公园','机场','地铁'
		],
	];
	$area = '';
	$scene = '';
	$connector = '';
	if(strpos(@me,'求婚')!==false or strpos($row['keywords'],'求婚')!==false){
		foreach($arr as $k => $v){
			foreach($v as $val){
				if (strpos(@me,$val)!==false) {
					switch($k){
						case "地区":
							$url = $dsql->GetOne("SELECT filename FROM dede_archives WHERE title LIKE '%{$val}求婚%' AND channel = -1");
							if($url){
								$urlstr = str_replace('index','','/proposal/'.$url['filename']);
								$area = '<a href="'.$urlstr.'">'.$val.'求婚</a>';
							}
							break;
					}
				}
			}
		}
	}
	@me = $area;
	{/$data.arc.title}</div>
	<div class="body_l">
		<div class="content">
			<h1>{$data.arc.title}</h1>
			<div class="con_info"><span>作者：{$data.arc.writer}</span><span>时间：{$data.arc.pubdate function="MyDate('Y-m-d H:i',@me)"}</span><span>浏览：<script src="{dede:field name='phpurl'}/count.php?view=yes&aid={dede:field name='id'}&mid={dede:field name='mid'}" type='text/javascript' language="javascript"></script></span></div>
			<div class="con_article">{$data.arc.body runphp="yes"}if(strpos(@me,'src="/')!==false){@me = str_replace('src="/','src="http://img1.1314theone.com/',@me);@me = str_ireplace('.png','.png/picture1',@me);@me = str_ireplace('.jpg','.jpg/picture1',@me);}{/$data.arc.body}</div>
		</div>
		<div class="pt050">
			<span class="module_t_l">相关阅读</span>
			<ul class="colums2">
	{$data.arc.id runphp="yes"}
function getCon($lim,$nid,$num=0,$whereArr,$len,&$con){
	global $dsql;
	$tid = "(14,16,17,18,19,20,21,26,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42) AND";
	$num++;
	if($len == 0){
		for($i=0;$i<count($whereArr);$i++){
			$wheres .= "arc.title LIKE '%$whereArr[$i]%' OR ";
		}
	}elseif($len == -1){
		$aid = end(explode(',',$nid));
		$typeid = $dsql->GetOne("SELECT typeid FROM dede_archives WHERE id = ".$aid);
		$tid = "({$typeid['typeid']})";
		$wheres = "no";
	}else{
		for($i=0;$i<$len;$i++){
			$wheres .= "arc.title LIKE '%$whereArr[$i]%' AND ";
		}
	}
	$len--;
	if(strpos($wheres,'AND')!==false){
		$where = substr($wheres,0,strlen($wheres)-5);
	}elseif(strpos($wheres,'OR')!==false){
		$where = '('.substr($wheres,0,strlen($wheres)-4).')';
	}elseif(strpos($wheres,'no')!==false){
		$where = '';
	}else{
		return $con;
	}
	$sql = "SELECT arc.*,tp.typedir,tp.typename,tp.corank,tp.isdefault,tp.defaultname,tp.namerule,tp.namerule2,tp.ispart,tp.moresite,tp.siteurl,tp.sitepath FROM `dede_archives` AS arc LEFT JOIN `dede_arctype` tp ON arc.typeid=tp.id WHERE arc.arcrank>=0 AND arc.typeid IN{$tid} $where AND arc.id NOT IN($nid) ORDER BY pubdate DESC LIMIT 0,{$lim}";
	$dsql->Execute("me{$num}", $sql);
	while ($row = $dsql->GetArray("me{$num}")){
			$con .= '<li><a href="' . GetFileUrl($row['id'], $row['typeid'], $row['senddate'], $row['title'], $row['ismake'], $row['arcrank'], $row['namerule'], $row['typedir'], $row['money'], $row['filename'], $row['moresite'], $row['siteurl'], $row['sitepath']) . '" target="_blank">' . $row['title'] . '</a></li>';
			$nids .= $row['id'].',';
		}
	$nid = $nids.$nid;
	$total=$dsql->GetTotalRow("me{$num}");	//获取查询数量;
	$lim = $lim-$total;
	if($lim > 0){
		getCon($lim,$nid,$num,$whereArr,$len,$con);
	}
	return $con;
}
function related($myme){
	global $dsql;
	$row = $dsql->GetOne("SELECT * FROM dede_archives WHERE id = {$myme}");
	$arr = [
		'地区' => [
			'北京','上海','重庆','天津','成都','昆明','丽江','贵阳','广州','深圳','南宁','海口','三亚','杭州','南京','苏州','合肥','济南','青岛','福州','厦门','南昌','长沙','武汉','郑州','太原','石家庄','沈阳','大连','长春','哈尔滨','西安','香港','巴黎','马尔代夫','巴厘岛','苏梅岛','塞班岛','普吉岛'
		],
		'分类' => [
			'求婚策划','求婚方式','求婚创意','求婚戒','求婚钻戒','求婚词','求婚歌','求婚音乐'
		],
		'场景' => [
			'快闪','电影院','咖啡','KTV','酒吧','酒店','餐厅','商场','广场','海边','校园','公园','机场','地铁'
		],
		'节日' => [
			'情人节','国庆','圣诞','元旦','春节','光棍'
		],
	];
	if(strpos($row['title'],'求婚')!==false or strpos($row['keywords'],'求婚')!==false){
		foreach($arr as $k => $v){
			foreach($v as $val){
				if (strpos($row['title'],$val)!==false) {
					$whereArr[] .= $val;
				}
			}
		}
	}
	$len = count($whereArr);
	return getCon(20,$myme,0,$whereArr,$len);
}
	@me = related(@me);
	{/$data.arc.id}
			</ul>
			<div class="cl"></div>
		</div>
		<div class="pt050">
			<span class="module_t_l">热门套餐<a href="/mall/" class="more" rel="nofollow">更多</a></span>
			<ul class="picsx_price">{dede:arclist limit='0,4' channelid='6' addfields='trueprice,truepricemax' typeid='22'}
				<li><a href="[field:arcurl/]" target="_blank" rel="nofollow"><img src="http://img1.1314theone.com[field:litpic/]" title="[field:title/]"><span>[field:title/]</span></a><p>￥[field:trueprice/][field:truepricemax runphp="yes"]if(empty(@me)){@me="";}else{@me=" - ".@me;}[/field:truepricemax]</p></li>
				{/dede:arclist}
				<div class="cl"></div>
			</ul>
		</div>
	</div>
	<div class="body_r">
		<div class="pt015">
			<span class="module_t_c bbn">相关栏目</span>
			<ul class="related_colums">
{dede:type}
	[field:id runphp="yes"]
		global $cfg_Cs, $dsql;
		$reid = $dsql->GetOne("SELECT reid FROM dede_arctype WHERE id LIKE '%@me%' ");
		if($reid['reid'] != 0){
			$dsql->Execute('mbidss',"SELECT id FROM dede_arctype WHERE reid LIKE '%$reid[reid]%' AND id NOT IN(27) AND sortrank < 50");
		}else{
			$dsql->Execute('mbidss',"SELECT id FROM dede_arctype WHERE reid LIKE '%@me%' AND id NOT IN(27)");
		}
		while ($mbid = $dsql->GetArray('mbidss')) {
			$mbids .= $mbid['id'] . ',';
		}
		$mbidsnew = substr($mbids,0,strlen($mbdis)-1);
		if ($mbids !='') {
			$sql = "SELECT typename,typedir FROM dede_arctype WHERE id IN ($mbidsnew) ORDER BY id ASC";
			$dsql->Execute('me', $sql);
			while ($row = $dsql->GetArray('me')) {
				$s .= '<li><a href="' . str_replace('{cmspath}','',$row['typedir']) . '/">' . $row['typename'] . '</a></li>';
			}
		}
		@me = $s;
	[/field:id]
{/dede:type}
{$data.arc.title runphp="yes"}
	$arr = [
		'一' => [
			'重庆','成都','昆明','丽江','贵阳','南宁'
		],
		'二' => [
			'广州','深圳','海口','三亚','香港','福州','厦门'
		],
		'三' => [
			'杭州','南京','苏州','上海'
		],
		'四' => [
			'南昌','长沙','武汉','合肥'
		],
		'五' => [
			'北京','天津','石家庄','济南','青岛'
		],
		'六' => [
			'西安','太原','郑州'
		],
		'七' => [
			'哈尔滨','长春','沈阳','大连'
		],
		'八' => [
			'巴黎','马尔代夫','巴厘','苏梅','塞班','普吉'
		],
		'场景' => [
			'快闪','电影院','咖啡','KTV','酒吧','酒店','餐厅','商场','广场','海边','校园','公园','机场','地铁'
		],
		'节日' => [
			'圣诞','光棍'
		],
	];
	global $dsql;
	foreach($arr as $k=>$v){
		foreach($v as $val){
			if(strpos(@me,$val)!==false){
				if($k != '场景' AND $k != '节日'){
					$relName = array_rand($v,2);
					foreach($relName as $relVal){
						$rel = $dsql->GetOne("SELECT * FROM dede_archives WHERE title LIKE '%{$v[$relVal]}%' AND channel = -1");
						if($rel){
							$con .= '<li><a href="/proposal/' . str_replace('index','',$rel['filename']) . '">' . $rel['title'] . '</a></li>';
						}
					}
				}else{
					$relName = array_rand($v,2);
					foreach($relName as $relVal){
						$rel = $dsql->GetOne("SELECT * FROM dede_arctype WHERE typename LIKE '%{$v[$relVal]}%求婚%'");
						if($rel){
							$con .= '<li><a href="' . str_replace('{cmspath}','',$rel['typedir']) . '/">' . $rel['typename'] . '</a></li>';
						}
					}
				}
			}
		}
	}
	@me = $con;
{/$data.arc.title}
				<div class="cl"></div>
			</ul>
		</div>
		<div class="pt015">
			<span class="module_t_c">推荐套餐</span>
			<ul class="piczy_price">{dede:arclist limit='0,8' channelid='6' addfields='trueprice,truepricemax' typeid='22'}
				<li><div class="piczy_p_l"><a href="[field:arcurl/]" target="_blank" rel="nofollow"><img src="http://img1.1314theone.com[field:litpic/]" title="[field:title/]"></a></div><div class="piczy_p_r"><a href="[field:arcurl/]" target="_blank" rel="nofollow">[field:title/]</a><p>¥[field:trueprice/][field:truepricemax runphp="yes"]if(empty(@me)){@me="";}else{@me=" - ".@me;}[/field:truepricemax]</p></div></li>
				{/dede:arclist}
			</ul>
		</div>
		<div class="pt015">
			<span class="module_t_c">最新求婚攻略</span>
			<ul class="colums1">{$data.arc.id runphp="yes"}global $dsql;
				$sql = "SELECT arc.*,tp.typedir,tp.typename,tp.corank,tp.isdefault,tp.defaultname,tp.namerule,tp.namerule2,tp.ispart,tp.moresite,tp.siteurl,tp.sitepath FROM `dede_archives` AS arc LEFT JOIN `dede_arctype` tp ON arc.typeid=tp.id WHERE arc.arcrank>=0 AND arc.typeid IN(16,17,18,19,20,21,26,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42) AND arc.id<>@me ORDER BY pubdate DESC LIMIT 0,9";
				$dsql->Execute("me", $sql);
				while ($row = $dsql->GetArray("me")){
					$con .= '<li><a href="' . GetFileUrl($row['id'], $row['typeid'], $row['senddate'], $row['title'], $row['ismake'], $row['arcrank'], $row['namerule'], $row['typedir'], $row['money'], $row['filename'], $row['moresite'], $row['siteurl'], $row['sitepath']) . '" target="_blank">' . $row['title'] . '</a></li>';
				}
				$sql2 = "SELECT arc.*,tp.typedir,tp.typename,tp.corank,tp.isdefault,tp.defaultname,tp.namerule,tp.namerule2,tp.ispart,tp.moresite,tp.siteurl,tp.sitepath FROM `dede_archives` AS arc LEFT JOIN `dede_arctype` tp ON arc.typeid=tp.id WHERE arc.arcrank>=0 AND arc.typeid IN(27) AND arc.id<>@me ORDER BY pubdate DESC LIMIT 0,1";
				$dsql->Execute("news", $sql2);
				while ($row = $dsql->GetArray("news")){
					$con .= '<li><a href="' . GetFileUrl($row['id'], $row['typeid'], $row['senddate'], $row['title'], $row['ismake'], $row['arcrank'], $row['namerule'], $row['typedir'], $row['money'], $row['filename'], $row['moresite'], $row['siteurl'], $row['sitepath']) . '" target="_blank">' . $row['title'] . '</a></li>';
				}
				@me = $con;
				{/$data.arc.id}
			</ul>
		</div>
	</div>
	<div class="cl"></div>
</div>
{include file="./theme/tot/footer.php"}
</body>
</html>