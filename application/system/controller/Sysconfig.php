<?php
namespace app\system\controller;

/**
* 
*/
class Sysconfig extends Base
{
	protected $sysconfig;
	function __construct(){
		parent::__construct();
		$this->sysconfig = new \app\system\model\Sysconfig;
	}

	public function index(){
		$result = $this->sysconfig->all();
		return $this->notify->notification($result);
	}

	public function readVar($varname){
		$result = $this->sysconfig->cache('system_config'.$varname,600)->where(['varname' => $varname])->find();
		return $this->notify->notification($result);
	}
	public function edit(){
		$result = $this->sysconfig->all();
		return $this->notify->notification($result,'list');
	}

	public function save(){
		$param = $this->request->param();
		$sysconfig = $this->sysconfig->all();
		// return dump($sysconfig);
		for ($i=0; $i < count($sysconfig); $i++) { 
			$data[$i]['id'] = $sysconfig[$i]['id'];
			$data[$i]['value'] = isset($param[$sysconfig[$i]['varname']]) ? $param[$sysconfig[$i]['varname']] : $sysconfig[$i]['value'];
		}
		// rad2deg(number)eturn dump($data);
		$result = $this->sysconfig->allowField(true)->saveAll($data);
		return $this->notify->notification($result);
	}
}