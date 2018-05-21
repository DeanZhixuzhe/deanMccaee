<?php
namespace app\auth\validate;
use think\Validate;

/**
* 
*/
class Role extends Validate
{
	
	protected $rule = [
		['id','number'],
		['title|角色名称','require|max:30']
		// ['discription|角色描述','']
	];
}