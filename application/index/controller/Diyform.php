<?php
namespace app\index\controller;
use app\content\controller\Diyform as df;
use liliuqinxian\tp_tools\Form;
/**
* 
*/
class Diyform extends Base
{
	public function index(){
		if (isset($this->param['diyform'])) {
			$diyform = new df;
			$result = $diyform->getDiyformByDir($this->param['diyform']);
			if ($result['code'] == 1001 && !empty($result['data']['diyformkeys'])) {
				$form = new Form($result['data']['diyformkeys']);
				$this->assign('data',$result['data']);
				$this->assign('form',$form->getForm());
				if ($this->checkTemplate($result['data']['template']) === false) {
					return $this->fetch($this->errorPage);
				}else{
					return $this->fetch($result['data']['template']);
				}
			}else{
				return $this->fetch($this->errorPage);
			}
		}else{
			return $this->fetch($this->errorPage);
		}
	}
	
	public function save(){
		$diyform = new df;
		$result = $diyform->saveValues();
		if ($result['code'] == 1001) {
			return $this->success('恭喜您提交成功，请耐心等待浪漫策划师联系您',$this->url->build('index/Index/index'));
		}else{
			return $this->error($result['msg']);
		}
	}

	
}