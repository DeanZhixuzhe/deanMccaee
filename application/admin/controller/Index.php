<?php
namespace app\admin\controller;
use think\Url;
/**
* 
*/
class Index extends Base
{
    function __construct(){
        parent::__construct();
        $this->auth = new \app\auth\controller\Base();
    }
	public function index(){
		return $this->fetch();
	}
	public function welcome(){
        $sys_info['os']             = PHP_OS;
        $sys_info['zlib']           = function_exists('gzclose');//zlib
        $sys_info['safe_mode']      = (boolean) ini_get('safe_mode');//safe_mode = Off
        $sys_info['safe_mode_gid']  = (boolean) ini_get('safe_mode_gid');//safe_mode_gid = Off
        $sys_info['timezone']       = function_exists("date_default_timezone_get") ? date_default_timezone_get() : L('no_setting');
        $sys_info['socket']         = function_exists('fsockopen') ;
        $sys_info['web_server']     = strpos($_SERVER['SERVER_SOFTWARE'], 'PHP')===false ? $_SERVER['SERVER_SOFTWARE'].'PHP/'.phpversion() : $_SERVER['SERVER_SOFTWARE'];
        $sys_info['phpv']           = phpversion(); 
        $sys_info['fileupload']     = @ini_get('file_uploads') ? ini_get('upload_max_filesize') :'unknown';
        $this->assign('data',$sys_info);
		return $this->fetch();
	}

    
    public function logout(){
        $this->auth->logout();
        return $this->redirect(Url::build('login/index'));
    }
}