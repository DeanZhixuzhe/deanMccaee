<?php
namespace app\auth\model;

/**
* 
*/
class Admin extends Base
{
	
	public function roles(){
		return $this->belongsToMany('Role');
	}
}