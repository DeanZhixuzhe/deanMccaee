<?php
use think\Request;
$sysconfig = \app\system\model\Sysconfig::all();
foreach ($sysconfig as $key => $value) {
    if ($value['varname'] == 'style') {
        $style = $value['value'];
    }
    if ($value['varname'] == 'webname') {
        $webname = $value['value'];
    }
    if ($value['varname'] == 'domain') {
        $domain = $value['value'];
    }
    if ($value['varname'] == 'copyright') {
        $copyright = $value['value'];
    }
    if ($value['varname'] == 'beian') {
        $beian = $value['value'];
    }
}
$view_style = isset($style) ? $style : '';
$view_path = 'pc/';
if (Request::instance()->isMobile() || strpos(Request::instance()->domain(),'m.') !== false) {
    $view_path = 'mobile/';
}

//配置文件
return [
    'default_return_type'    => 'html',

	'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => ROOT_PATH.'./theme/'.$view_style.DS.$view_path,
        // 模板后缀
        'view_suffix'  => 'php',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],
    'website'               => [
        'webname'       => isset($webname) ? $webname : '',
        'domain'        => isset($domain) ? $domain : '',
        'beian'         => isset($beian) ? $beian : '',
        'copyright'     => isset($copyright) ? $copyright : '',
        'view_style'    => $view_style,
    ]
];