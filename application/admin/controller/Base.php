<?php
namespace app\admin\controller;
use think\Controller;
use think\Url;
use think\Request;
use think\Response;
use think\Validate;
use think\Loader;

class Base extends Controller
{
	protected $module;
	protected $controller;
	protected $action;
	protected $list;
	protected $allList;
	protected $loader;
	protected $verify;
	protected $url;
	
	function __construct(){
		parent::__construct();
		$user = \app\auth\controller\Base::is_login();
		if (!$user) {
			return $this->error('您还没有登录',Url::build('login/index'));
		}
		$this->url = new Url;
		//获取模块、控制、方法 并转换小写
		$this->module = lcfirst($this->request->module());
		$this->controller = lcfirst($this->request->controller());
		$this->action = lcfirst($this->request->action());
		
		$modules = $this->request->controller();
		$controllers = strpos($this->request->action(),'_') !== false ? explode('_',strtolower($this->request->action()))[0] : '';
		$actions = strpos($this->request->action(),'_') !== false ? explode('_',strtolower($this->request->action()))[1] : '';
		$urls['create'] = Url::build("admin/$modules/$controllers"."_create");
		$urls['save'] = Url::build("admin/$modules/$controllers"."_save");
		$urls['read'] = Url::build("admin/$modules/$controllers"."_read");
		$urls['edit'] = Url::build("admin/$modules/$controllers"."_edit");
		$urls['update'] = Url::build("admin/$modules/$controllers"."_update");
		$urls['delete'] = Url::build("admin/$modules/$controllers"."_delete");
		$this->assign('urls',$urls);


		//赋值通用数据
		
		if (isset($$controller)) {
			$this->list = $$controller->paginate();
			$this->allList = $$controller->all();
			$this->verify = Loader::validate($this->request->controller());
		}
		//赋值系统类库
		$this->loader = new Loader;
		
	}

	public function _initialize(){

	}
	public function clearcache(){
		\think\Cache::clear();
	}
	/**
	 * [处理无限级分类层级关系函数]
	 * @author deanyan 2017-10-08T07:07:54+0800
	 * @copyright www.deanyan.com
	 * @param     array           $arr     需要处理的数组
	 * @param     string          $mObj    模型对象名，必须为小写
	 * @param     string          $name    初始条件，一般为分类名称，为空默认顶级
	 * @param     integer         $showtop 是否显示顶级分类名称，默认值0代表不显示
	 * @return    [type]                   [description]
	 */
	protected function infinite($arr,$mObj,$name='',$showtop=0){
		/*
		$arr = 需要处理的数组
		$name = 需要处理的初始顶层条件，一般为分类名称
		$showtop = 是否显示顶级分类名称，默认值0代表不显示
		 */
		if (empty($name) || null == $name) {
			$init['id'] = 0;
			$init['tier'] = 0;
		}else{
			$init = $this->$mObj->get(['name' => $name]);
			$init['tier'] = substr_count($init['path'],'-')+1;
		}
		if ($init['id'] == 0) {
			$showtop = 0;	//处理初始条件的ID为0的情况，强制不显示顶级分类名称
		}
		foreach ($arr as $key => &$value) {
			$num = substr_count($value['path'],'-');	//获取path中分隔符的数量，来判断当前分类的层级
			if ($init['tier']-$num>0) {
				unset($arr[$key]);	//删除比当前分类层级更高的分类
			}elseif (explode('-',$value['path'])[$init['tier']] != $init['id']) {
				unset($arr[$key]);	//删除不属于当前分类层级的分类
			}else{
				if ($showtop == 1) {	//处理显示顶级分类名称，子集的格式问题
					if ($value['parent_id'] == $init['id']) {
						$pre = '|--';
					}else{
						$pre = '|'.str_repeat('--',$num-$init['tier']+1);
					}
				}else{
					if ($value['parent_id'] == $init['id']) {
						$pre = '';
					}else{
						$pre = '|'.str_repeat('--',$num-$init['tier']);
					}
				}
				$value['tree'] = $pre.$value['name'];
			}
		}
		if ($showtop == 1) {	//处理显示顶级分类名称，单独在此处增加一个tree
			$init['tree'] = $init['name'];
			$arr[] = $init;
		}
		foreach ($arr as $v) {
			$sort[] = $v['path'].'-'.$v['id'];
		}
		array_multisort($sort,$arr);
		return $arr;	//返回处理完成的数组
	}

	public function showlist(){
		$list = $this->infinite(Area::all(),'亚洲');
		$this->assign('list',$list);
		return $this->fetch();
	}
}