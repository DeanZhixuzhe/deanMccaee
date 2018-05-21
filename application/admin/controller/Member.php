<?php
namespace app\admin\controller;
use app\account\controller\Member as accountMember;
/**
* 
*/
class Member1 extends Base
{
	protected $member;
	function __construct(){
		parent::__construct();
		$this->member = new accountMember;
	}

	public function index(){
		$result = $this->member->index();
		if ($result['code'] == 1001) {
			$this->assign('list',$result['data']);
			return $this->fetch();
		}
	}

	public function add(){
		return $this->fetch();
	}
	public function save(){
		$result = $this->member->save();
		if ($result['code'] == 1001) {
			return $this->success($result['msg'],$this->url->build('admin/Member/index'));
		}else{
			return $this->error($result['msg']);
		}
	}
	public function edit($id){
		$result = $this->member->edit($id);
		if ($result['code'] == 1001) {
			$this->assign('data',$result['data']);
			return $this->fetch();
		}else{
			return $this->error($result['msg']);
		}
	}
}