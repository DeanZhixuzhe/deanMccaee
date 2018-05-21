<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Url;
use think\Response;
use think\Config;
use think\Session;
use think\Cache;
// use app\system\model

class Base extends Controller
{
    protected $url;
    protected $config;
    protected $errorPage;
    protected $domain;
    protected $template;
    
    protected $param;
    function __construct(){
        parent::__construct();
        $this->errorPage = Config::get('template.view_path').'404.'.Config::get('template.view_suffix');
        // $this->domain = 'http://www.1314theone.com';
        $this->param = $this->request->param();
        $this->url = new Url();
        $this->config = new Config();
    }

    public function _initialize(){
        $sysconfig = new \app\system\controller\Sysconfig;
        $cfg['webname'] = Config::get('website.webname');
        $cfg['template'] = Config::get('template.path').Config::get('template.style').'/';
        $cfg['domain'] = Config::get('website.domain');
        $cfg['beian'] = Config::get('website.beian');
        $cfg['copyright'] = Config::get('website.copyright');
        $cfg['view_style'] = Config::get('website.view_style');
        $cfg['title'] = $sysconfig->readVar('title')['data']['value'];
        $cfg['keywords'] = $sysconfig->readVar('keywords')['data']['value'];
        $cfg['description'] = $sysconfig->readVar('description')['data']['value'];
        $this->assign('cfg',$cfg);
        // dump($this->request->header());
        // dump($this->request->isMobile());
        /**
         * 测试Request请求内容
         */
        // $ret['domain'] = $this->request->domain();
        // $ret['url'] = $this->request->url();
        // $ret['url-true'] = $this->request->url(true);
        // $ret['baseurl'] = $this->request->baseUrl();
        // $ret['baseurl-true'] = $this->request->baseUrl(true);
        // $ret['root'] = $this->request->root();
        // $ret['root-true'] = $this->request->root(true);
        // $ret['pathinfo'] = $this->request->pathinfo();
        // $ret['path'] = $this->request->path();
        // $ret['ext'] = $this->request->ext();
        // $ret['time'] = $this->request->time();  //秒
        // $ret['time-true'] = $this->request->time(true); //微妙
        // $ret['type'] = $this->request->type();  //当前请求的资源类型
        // $ret['method'] = $this->request->method();  //获取当前请求类型
        // $ret['method-true'] = $this->request->method(true); //原始
        // $ret['param'] = $this->request->param();
        // $ret['route'] = $this->request->route();
        // $ret['patch'] = $this->request->patch();
        // $ret['request'] = $this->request->request();
        // $ret['session'] = $this->request->session();
        // $ret['cookie'] = $this->request->cookie();
        // $ret['server'] = $this->request->server();  //获取当前请求的SERVER变量
        // $ret['env'] = $this->request->env();
        // $ret['file'] = $this->request->file();
        // $ret['header'] = $this->request->header();
        // $ret['input'] = $this->request->input();
        // $ret['filter'] = $this->request->filter();
        // $ret['isSsl'] = $this->request->isSsl();
        // $ret['isAjax'] = $this->request->isAjax();
        // $ret['isPjax'] = $this->request->isPjax();
        // $ret['isMobile'] = $this->request->isMobile();
        // $ret['ip'] = $this->request->ip();
        // $ret['scheme'] = $this->request->scheme();
        // $ret['query'] = $this->request->query();
        // $ret['host'] = $this->request->host();
        // $ret['port'] = $this->request->port();
        // $ret['protocol'] = $this->request->protocol();
        // $ret['remotePort'] = $this->request->remotePort();
        // $ret['routeInfo'] = $this->request->routeInfo();
        // $ret['dispatch'] = $this->request->dispatch();  //调度信息
        // $ret['module'] = $this->request->module();
        // $ret['controller'] = $this->request->controller();
        // $ret['action'] = $this->request->action();
        // $ret['langset'] = $this->request->langset();
        // $ret['getContent'] = $this->request->getContent();
        // $ret['getInput'] = $this->request->getInput();
        // $ret['token'] = $this->request->token();
        // $ret['getCache'] = $this->request->getCache();
        // dump($ret);
    }

    protected function checkTemplate($name){
        return is_file(Config::get('template.view_path').$this->request->controller().Config::get('template.view_depr').$name.'.'.Config::get('template.view_suffix'));
    }
}
