<?php

/**
 * Product.php
 * Author   : cren
 * Date     : 2016/11/27
 * Time     : 下午11:22
 */
class Product extends HZ_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service/product_service_model', 'product_service');
    }

    /**
     * 查询
     */
    public function query()
    {
        $option = array();
        $res = $this->product_service->query($option);
        echo outputResponse($res);
    }

    /**
     * 获取某产品
     */
    public function getProductByPid()
    {
        $where = array(
            'Fproduct_id'  => $this->input->get('product_id')// 产品id
        );
        $res = $this->product_service->getProductByPid($where);
        echo outputResponse($res);
    }

    /**
     * 添加产品
     */
    public function add()
    {
        $data = array(
            'Fstore_id' => $this->input->post('store_id'),
            'Fproduct_name' => $this->input->post('product_name'),
            'Fproduct_price' => $this->input->post('product_price'),
            'Fproduct_num' => $this->input->post('product_num'),
            'Fcategory_id' => $this->input->post('category_id'),
            'Fcreate_time'  => time(),
            'Fupdate_time'  => time(),
        );
        $res = $this->product_service->add($data);
        echo outputResponse($res);
    }

    /**
     * 更新分类
     */
    public function update()
    {
        $where = array('Fproduct_id' => $this->input->post('id'));
        $data = array(
            'Fstore_id' => $this->input->post('store_id'),
            'Fproduct_name' => $this->input->post('product_name'),
            'Fproduct_price' => $this->input->post('product_price'),
            'Fproduct_num' => $this->input->post('product_num'),
            'Fcategory_id' => $this->input->post('category_id'),
            'Fupdate_time'  => time(),
        );
        $res = $this->product_service->update($where, $data);
        echo outputResponse($res);
    }

    /**
     * 删除分类
     */
    public function del()
    {
        $where = array('Fproduct_id' => $this->input->get('id'));
        $res = $this->product_service->del($where);
        echo outputResponse($res);
    }
}