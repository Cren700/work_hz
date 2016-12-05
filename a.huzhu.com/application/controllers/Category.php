<?php

/**
 * Category.php
 * Author   : cren
 * Date     : 2016/11/30
 * Time     : 下午8:23
 */
class Category extends HZ_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service/category_service_model', 'cate_service');
    }

    public function index()
    {
        $res = $this->cate_service->index();
        echo json_encode_data($res);
    }

    public function get()
    {
        $data = array(
            'id' => $this->input->get('id')
        );
        $res = $this->cate_service->getCategory($data);
        echo json_encode_data($res);
    }

    public function save()
    {
//        $data = array(
//            'is_new' => $this->input->post('is_new'),
//            'id' => $this->input->post('id'),
//            'category_id' => $this->input->post('category_id'),
//            'category_name' => $this->input->post('category_name')
//        );

        $data = array(
            'is_new' => true,
            'id' => 6,
            'category_id' => 'buyao',
            'category_name' => '不保险',
            'remark' => '不保险'
        );
        $res = $this->cate_service->save($data);
        echo json_encode_data($res);
    }

    public function del()
    {
        $data = array(
            'id' => $this->input->get('id')
        );
        $res = $this->cate_service->del($data);
        echo json_encode_data($res);
    }
}