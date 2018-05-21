<?php
namespace app\index\controller;

/**
* 
*/
class Error extends Base
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function _empty(){
		dump($this->param);
		if (strpos($this->request->action(),'_') === false) {
			return $this->error('请求页面错误');
		}
		$module = strtolower($this->request->controller());
		$controller = explode('_',strtolower($this->request->action()))[0];
		$action = explode('_',strtolower($this->request->action()))[1];
		// $param = $this->request->param();
		
		$class = "\\app\\$module\\controller\\".ucfirst($controller);
		if (class_exists($class)) {
			$obj = new $class;
		}else{
			return $this->error('请求页面错误');
		}
		if (method_exists($obj,$action)) {
			try {
				$result = $obj->$action();
			} catch (\Exception $e) {
				if (strpos($e->getMessage(),'Missing argument') !== false) {
					$arguments = '';
					foreach ($param as $value) {
						$arguments .= $value.',';
					}
					$arguments = substr($arguments,0,-1);
					$result = $obj->$action($arguments);
				}

			}
			if (isset($result['type']) && $result['type'] == 'msg') {
				if ($result['code'] == 1001) {
					return $this->success($result['msg']);
				}else{
					return $this->error($result['msg']);
				}
			}else{
				if (isset($result['code']) && $result['code'] == 1001) {
					if (strpos($result['type'],'|') !== false) {
						foreach (explode('|',$result['type']) as $value) {
							$this->assign($value,$result['data'][$value]);
						}
					}else{
						$this->assign($result['type'],$result['data']);
					}
					
				}
				return $this->fetch();
			}
		}else{
			return $this->error('请求页面错误');
		}
	}
}