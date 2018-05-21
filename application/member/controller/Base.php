<?php
namespace app\member\controller;
use think\Controller;
use think\Url;
use think\Request;
use think\Response;
use think\Validate;
use think\Loader;
use liliuqinxian\tp_tools\ShowCode;

use app\member\model\Member;
class Base extends Controller
{
	protected $module;
	protected $controller;
	protected $action;
	protected $loader;
	protected $verify;
	protected $code,$data;

	protected $member;
	function __construct(){
		parent::__construct();
		$this->data = $this->request->param();
		$this->code = new ShowCode();
		$this->loader = new Loader();
		$this->member = new Member;
	}

	
}