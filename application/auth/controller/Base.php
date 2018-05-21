<?php
namespace app\auth\controller;
use think\Controller;
use think\Config;
use think\Session;
use liliuqinxian\tp_tools\ShowCode;
use app\auth\model\Role;
use app\auth\model\Admin;
/**
* 
*/
class Base extends Controller
{
	protected $role,$admin,$code,$param;
	public function __construct()
	{
		parent::__construct();
		$this->role = new Role;
		$this->admin = new Admin;
		$this->code = new ShowCode;
		$this->param = $this->request->param();
	}

	/**
     * 检测用户是否登录
     * @return mixed
     */
    public static function is_login(){
        $user = self::sessionGet('user');
        if (empty($user)) {
            return false;
        } else {
            return  self::sessionGet('user_sign') == self::data_auth_sign($user) ? $user : false;
        }
    }

    /**
     * 用户登入
     * @access private static
     * @param  int      $uid 用户ID
     * @param  string   $username 用户昵称
     * @return array
     */
    public static function login($username,$password){
        $data = [
                'username'      => $username,
                'password'      => self::encryption($password),
            ];
        $admin = new Admin();
        $user = $admin->where($data)->find();
        if ($user) {
            $session_prefix = Config::get('session.prefix');
            $session        = [
                                'uid'       => $user['id'],
                                'username'  => $user['username'],
                                'time'      => time()
                            ];

            Session::set($session_prefix.'user',$session);
            Session::set($session_prefix.'user_sign',self::data_auth_sign($session));
            return ['code' => '1','result' => 'success','message' => '成功'];
        }else{
            return ['code' => '0','result' => 'fail','message' => '账号或密码错误'];
        }
    }
    
    /**
     * 注销
     * @access private static
     * @return bool
     */
    public static function logout(){
        $session_prefix = Config::get('session.prefix');
        Session::delete($session_prefix.'user');
        Session::delete($session_prefix.'user_sign');
        return true;
    }

    /**
     * 读取session
     * @access private static
     * @param  string  $path 被认证的数据
     * @return mixed
     */
    protected static function sessionGet($path =''){
        $session_prefix = Config::get('session.prefix');
        $user           = Session::get($session_prefix.$path);
        return $user;
    }

    /**
     * 数据签名认证
     * @access private static
     * @param  array  $data 被认证的数据
     * @return string       签名
     */
    protected static  function data_auth_sign($data) {
        $code = http_build_query($data); //url编码并生成query字符串
        $sign = sha1($code); //生成签名
        return $sign;
    }

    /**
     * 密码加密
     * @author deanyan 2018-02-20T13:23:52+0800
     * @copyright www.deanyan.com
     * @param     string          $password 密码
     * @return    MD5
     */
    protected static function encryption($password){
        $pwd = md5($password."+".Config::get('session.prefix'));
        return md5(substr($pwd,0,24));
    }
}