<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::get('/','index/index/index');
Route::pattern(['id' => '[0-9]+','page' => 'p[0-9]+','area' => '[a-z]+','tags' => '[A-Za-z0-9]+','dir1' => '[A-Za-z0-9]+','dir2' => '[A-Za-z0-9]+','dir3' => '[A-Za-z0-9]+']);

Route::alias('account','index/Member');