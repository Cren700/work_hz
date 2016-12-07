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
        $this->load->model('service/category_service_model', 'cate_service');
    }

    public function index()
    {

        $cate = $this->cate_service->index();
        $jsArr = array(
            'product/product.js'
        );
        $this->smarty->assign('cate', $cate['data']);
        $this->smarty->assign('jsArr', $jsArr);
        $this->smarty->display('product/index.tpl');
    }
    
    public function query()
    {
        $option = array(
            'p' => $this->input->get('p') ? : 1 ,
            'page_size' => $this->input->get('n') ? : 10,
            'product_id'   => $this->input->get('product_id') ? : '',
            'category_id' => $this->input->get('category_id') ? : '',
            'store_id'  => $this->_uid,
        );
        $cate = $this->cate_service->index();
        $cate = isset($cate['data']['list']) ? $cate['data']['list'] : array();
        $tmp = array();
        foreach ($cate as $c) {
            $tmp[$c['Fcategory_id']] = $c['Fcategory_name'];
        }
        $product = $this->product_service->query($option);
        $this->smarty->assign('cate', $tmp);
        $this->smarty->assign('info', $product['data']);
        $this->smarty->assign('page', $this->page($product['data']['count'], $option['p'], $option['page_size'], ''));
        echo $this->smarty->display('product/list.tpl');
    }

    public function get()
    {
        $data = array(
            'product_id' => $this->input->get('id')
        );
        $res = $this->product_service->getProductByPid($data);
        echo json_encode_data($res);
    }

    public function add()
    {
        $cate = $this->cate_service->index();
        $jsArr = array(
            'plugin/jquery.placeholder.min.js',
            'plugin/jquery.validate.js',
            'product/detail.js'
        );
        $this->smarty->assign('is_new', 1);
        $this->smarty->assign('cate', $cate['data']);
        $this->smarty->assign('jsArr', $jsArr);
        $this->smarty->display('product/detail.tpl');
    }

    public function detail($pid = null){
        $data = array(
            'product_id' => $pid ? : $this->input->get('pid')
        );
        $product = $this->product_service->getProductByPid($data);
        if (empty($product['data'])) {
            $uri = rawurlencode($_SERVER['REQUEST_URI']);
            $this->jump(getBaseUrl('/404/'.$uri));
        }
        $cate = $this->cate_service->index();
        $jsArr = array(
            'plugin/jquery.placeholder.min.js',
            'plugin/jquery.validate.js',
            'product/detail.js'
        );
        $this->smarty->assign('is_new', 0);
        $this->smarty->assign('cate', $cate['data']);
        $this->smarty->assign('product', $product['data']);
        $this->smarty->assign('jsArr', $jsArr);
        $this->smarty->display('product/detail.tpl');
    }


    public function save()
    {
        $data = array(
            'is_new' => $this->input->post('is_new'),
            'product_id' => $this->input->post('product_id'),
            'store_id' => $this->_uid,
            'product_name' => $this->input->post('product_name'),
            'product_num' => $this->input->post('product_num'),
            'product_price' => $this->input->post('product_price'),
            'category_id' => $this->input->post('category_id'),
            'remark' => $this->input->post('remark'),
        );
        $res = $this->product_service->save($data);
        echo json_encode_data($res);
    }

    public function status()
    {
        $data = array(
            'status'    => $this->input->post('status'),
            'is_del'    => $this->input->post('is_del'),
            'pid'       => $this->input->post('pid'),
        );
        $res = $this->product_service->status($data);
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