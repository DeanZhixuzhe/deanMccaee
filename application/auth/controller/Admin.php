<?php

namespace app\auth\controller;

use think\Controller;
use think\Request;

class Admin extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $result = $this->admin->paginate();
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
        $validate = $this->validate($data,'auth/Role');
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

    public function impower(){
        $role = $this->role->all();
        $admin = $this->admin->with('roles')->find($this->param);
        $result['roles'] = $admin['roles'];
        // dump($result['roles']);
        $result['list'] = $role;
        $result['data'] = $this->param;
        return $this->code->notification($result,'list|data|roles');
    }
    public function impowersave(){
        $admin = $this->admin->with('roles')->find($this->param['admin_id']);
        if (!isset($this->param['role_id']) || !is_array($this->param['role_id'])) {
            $this->param['role_id'] = [];
        }
        if (count($admin['roles']) > 0) {
            foreach ($admin['roles'] as $key => $value) {
                $admin_roles[] = $value['id'];
            }
        }
        if (isset($admin_roles) && count($admin_roles) > 0) {
            $delete_roles = array_diff($admin_roles,$this->param['role_id']);
            if (count($delete_roles) > 0) {
                $admin->roles()->detach($delete_roles);
            }
        }

        if (count($this->param['role_id']) < 1 && count($admin['roles']) > 0) {
            $result = 1;
        }else{
            $result = $admin->roles()->saveAll($this->param['role_id']);
        }
        
        return $this->code->notification($result);
    }
}
