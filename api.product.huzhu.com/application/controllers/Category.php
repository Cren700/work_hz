<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('service/category_service_model', 'cate_service');
	}

    /**
     * 分类列表
     */
	public function lists()
    {
        $res = $this->cate_service->lists();
        echo outputResponse($res);
    }

    /**
     * 获取分类
     */
    public function getCategory()
    {
        $where = array(
            'Fcategory_id'  => $this->input->get('category_id')
        );
        $res = $this->cate_service->getCategory($where);
        echo outputResponse($res);
    }

    /**
     * 添加分类
     */
    public function add()
    {
//        $data = $this->input->post();
//        $data = array('Fcategory_id' => '5', 'Fcategory_name' => '不怕死类', 'Fremark' => '就不怕死');
//        unset($data['Fid']);
        $data = array();
        $data['Fcategory_id'] = $this->input->post('category_id');
        $data['Fcategory_name'] = $this->input->post('category_name');
        $data['Fremark'] = $this->input->post('remark');
        $res = $this->cate_service->add($data);
        echo outputResponse($res);
    }

    /**
     * 更新分类
     */
    public function update()
    {
        $data = array(
            'Fcategory_id' => $this->input->post('category_id'),
            'Fcategory_name' => $this->input->post('category_name'),
            'Fremark' => $this->input->post('remark'),
        );
        $where = array('Fid' => $this->input->post('id'));
        $res = $this->cate_service->update($where, $data);
        echo outputResponse($res);
    }

    /**
     * 删除分类
     */
    public function del()
    {
        $where = array('Fid' => $this->input->get('id'));
        $res = $this->cate_service->del($where);
        echo outputResponse($res);
    }


}
