<?php
namespace app\system\controller;
use think\Controller;
use think\Config;
use think\Session;

/**
* 
*/
class Base extends Controller
{
	protected $notify;
	function __construct(){
		parent::__construct();
		$this->notify = new \liliuqinxian\tp_tools\ShowCode;
	}
}