<?php 
namespace app\member\controller;

/**
* 
*/
class Admin extends Base
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $result = $this->member->paginate();
        return $this->code->notification($result,'list');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save()
    {
        $data = $this->request->param();
        $validate = $this->validate($this->data,'auth/Role');
        if ($validate !== true) {
            return $this->code->codeWithoutData(1000,$validate);
        }
        $result = $this->admin->allowField(true)->save($data);
        return $this->code->notification($result);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id = '')
    {
        if ($id == '' && !isset($this->param['id'])) {
            return $this->code();
        }
        if ($id != '') {
            $result = $this->admin->find($id);
        }else{
            $result = $this->admin->find($this->param['id']);
        }
        
        return $this->code->notification($result);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update($id)
    {
        $data = $this->request->param();
        $validate = $this->validate($data,'auth/Role');
        if ($validate !== true) {
            return $this->code->codeWithoutData(1000,$validate);
        }
        $result = $this->admin->allowField(true)->update($data,$id);
        return $this->code->notification($result);
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

    public function register(){
        $pcurl = 'http://oa.mccaee.com:16950/SelfOpenAccount/goIndex.action?brokerageId=6080888&tjr=yanky';
        $mobileurl = 'http://oa.mccaee.com:16950/SelfOpenAccount/goRegisterMobile.action?brokerageId=6080888&tjr=yanky';
        $data = $this->request->param();
        $data['terminal'] = $this->request->isMobile() ? 'mobile' : 'pc';
        $data['user_agent'] = $this->request->header('user-agent');
        $data['ip'] = $this->request->ip();
        if (!isset($data['realname']) || !isset($data['smacc']) || !isset($data['mobile'])) {
            return $this->error('注册链接错误，请核实！');
        }
        if (empty($data['realname']) && empty($data['smacc']) && empty($data['mobile'])) {
            return $this->error('注册链接错误，请核实！');
        }
        
        $result = $this->member->allowField(true)->save($data);
        if ($result) {
            if ($this->request->isMobile()) {
                $iframeUrl = $mobileurl;
            }else{
                $iframeUrl = $pcurl;
            }
            return $this->code->code(1001,$iframeUrl);
        }else{
            return $this->code->codeWithoutData(1000,'注册链接错误，请核实！');
        }
    }
    
    public static function login(){
    }

    public static function logout(){
    }
}