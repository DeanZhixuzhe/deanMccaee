<?php
namespace app\index\controller;
use app\member\controller\Admin;
// use app\member\controller\Base;
use think\Request;
use think\Session;
class Member extends Base
{
	protected $member;
	function __construct(){
		parent::__construct();
		$this->member = new Admin();

	}
	public function login(){
		$referer = $this->request->header('referer') != null ? $this->request->header('referer') : '/';
		if (Session::get('loginReferee') == null) {
			Session::set('loginReferee',$referer);
		}
		return $this->fetch();
	}
	public function logincode(){
		$referer = $this->request->header('referer') != null ? $this->request->header('referer') : '/';
		if (Session::get('loginReferee') == null) {
			Session::set('loginReferee',$referer);
		}
		return $this->fetch();
	}
	public function register(){
		$result = $this->member->register();
		if ($result['code'] == 1001) {
			return $this->fetch('',['iframe' => $result['data'],]);
		}else{
			return $this->error($result['msg']);
		}
		
	}

	public function build(){
		return $this->fetch();
	}

	public function log(){
		$data = $this->request->param();
		if (!isset($data['mode'])) {
			return $this->error('登陆失败');
		}elseif($data['mode'] == 'password') {
			$result = $this->member->login($data['username'],$data['password'],$data['mode']);
		}elseif($data['mode'] == 'code') {
			$result = $this->member->login($data['mobile'],$data['code'],$data['mode']);
		}else{
			return $this->error('登陆失败');
		}
		if ($result['code'] == 1001) {
			$url = Session::get('loginReferee') != null ? Session::get('loginReferee') : '/';
			Session::delete('loginReferee');
			return $this->success('登陆成功',$url);
		}else{
			return $this->error($result['msg']);
		}
	}
	public function logout(){
		$this->member->logout();
		$this->redirect($this->request->header('referer'));
	}
	public function reg(){
		$result = $this->member->register();
		if ($result['code'] == 1001) {
			return $this->success('注册成功');
		}else{
			return $this->error($result['msg']);
		}
	}
}