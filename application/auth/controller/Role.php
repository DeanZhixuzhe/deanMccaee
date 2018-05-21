<?php

namespace app\auth\controller;

use think\Controller;
use think\Request;

class Role extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $result = $this->role->paginate();
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
        // if (isset($data['id'])) {
        //     $result = $this->role->allowField(true)->save($data,$);
        // }
        $result = $this->role->allowField(true)->save($data);
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
    public function edit($id)
    {
        $result = $this->role->find($id);
        return $this->code->notification($result,'data');
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update()
    {
        $data = $this->request->param();
        $validate = $this->validate($data,'auth/Role');
        if ($validate !== true) {
            return $this->code->codeWithoutData(1000,$validate);
        }
        $result = $this->role->allowField(true)->save($data,['id' => $data['id']]);
        dump($result);
        return $this->code->notification($result,'msg');
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
}
