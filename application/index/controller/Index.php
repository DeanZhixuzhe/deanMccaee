<?php
namespace app\index\controller;

use think\Loader;
use think\Controller;
use think\Request;
use think\Route;

class Index extends Base
{
	protected $obj;
    function __construct(){
        parent::__construct();
        //判断是否需要跳转手机端域名
        if ($this->request->isMobile() && strpos($this->request->host(),'m.') === false) {
            $mwebUrl = (strpos($this->request->url(true),'www.') !== false) ? str_replace('http://www.','http://m.',$this->request->url(true)) : str_replace('http://','http://m.',$this->request->url(true));
            header('Location: '.$mwebUrl);exit();
        }
    }

    public function index(){
        return $this->fetch();
    }

    public function sgpage(){
        $data = $this->request->url();
        $dir = ($data == '/map/') ? 'map/index.html' : substr($data,1);
        // dump($dir);
        $result = $this->obj->getSgpage($dir);
        // dump($result);
        if ($result == null || $result == false) {
            return $this->fetch($this->errorPage);
        }else{
            return $this->fetch($result['template'],['data' => $result]);
        }
    }

    public function sitemap(){
        $result['arctype'] = $this->obj->getArctype();
        $result['areatype'] = $this->obj->getAreaType();
        $result['list'] = $this->obj->getArticleClassify();
        return $this->fetch($this->template.'sitemap.xml',['data' => $result]);
    }
}
