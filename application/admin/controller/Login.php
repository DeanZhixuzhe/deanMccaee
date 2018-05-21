<?php
namespace app\admin\controller;

use think\Url;
use think\Controller;
/**
* 
*/
class Login extends Controller
{
	
	public function index(){
		if ($this->request->isPost()) {
			$data = $this->request->param();
			$validate = [
                ['username|用户名','require|max:25'],
                ['password|密码','require']
            ];
            //验证
            $validateRes = $this->validate($data,$validate);
            if (true !== $validateRes) {
                return $this->error($validateRes);
            }
            
            $auth = new \app\auth\controller\Base();
            $result = $auth::login($data['username'],$data['password']);
            
            if ($result['code'] == 1) {
            	return $this->success('登陆成功',Url::build('index/index'));
            }else{
            	return $this->error($result['message'],Url::build('login/index'));
            }
		}
		return $this->fetch();
	}
}