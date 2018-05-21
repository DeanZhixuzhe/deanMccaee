<?php
namespace app\admin\controller;

use app\auth\controller\Role;
/**
* 
*/
class Auth1 extends Base
{
	protected $role;
	public function __construct(Role $role)
	{
		parent::__construct();
		$this->role = $role;
	}
	public function _empty(){
		$err = new \app\admin\controller\Error;
		return $err->_empty();
	}
	
	public function admin_impower(){
		$result = $this->role->index();
		$this->assign('list',$result['data']);
		$this->assign('data',$this->request->param());
		return $this->fetch();
	}
}