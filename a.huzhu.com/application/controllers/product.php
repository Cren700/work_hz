<?php

/**
 * product.php
 * Author   : cren
 * Date     : 2016/11/27
 * Time     : 下午4:01
 */
class Product extends BaseControllor
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service/product_service_model', 'product_service');
    }

    public function index()
    {
        $this->smarty->display('product/index.tpl');
    }
    
    public function query()
    {
        $data = array();
        $res = $this->product_service->query($data);
        $this->smarty->assign('info', $res['data']);
        $this->smarty->assign('page', $this->page(20, 3, '/product/index'));
        echo $this->smarty->fecth('product/list.tpl');
    }

    public function get()
    {
        $data = array(
            'product_id' => $this->input->get('id')
        );
        $res = $this->product_service->getProductByPid($data);
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
            'is_new' => false,
            'id' => '',
            'store_id' => $this->_uid,
            'product_name' => '抗癌公社11',
            'product_num' => '10000',
            'product_price' => '100002',
            'category_id' => 4
        );
        $res = $this->product_service->save($data);
        echo json_encode_data($res);
    }

    public function del()
    {
        $data = array(
            'id' => $this->input->get('id')
        );
        $res = $this->product_service->del($data);
        echo json_encode_data($res);
    }

}