<?php

/**
 * Product.php
 * Author   : cren
 * Date     : 2016/11/28
 * Time     : 下午11:39
 */
class Product_service_model extends HZ_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dao/product_dao_model', 'product_dao');
    }
    
    public function query($option)
    {
        $res = array('code' => 0);
        $where = array('Fis_del' => '0');

        if (isset($option['Fproduct_id']) && !empty($option['Fproduct_id'])) {
            $where['Fproduct_id'] = $option['Fproduct_id'];
        }

        if (isset($option['Fcategory_id']) && !empty($option['Fcategory_id'])) {
            $where['Fcategory_id'] = $option['Fcategory_id'];
        }

        if (isset($option['Fstore_id']) && !empty($option['Fstore_id'])) {
            $where['Fstore_id'] = $option['Fstore_id'];
        }

        if (isset($option['Fproduct_name']) && !empty($option['Fproduct_name'])) {
            $where['Fproduct_name'] = $option['Fproduct_name'];
        }

        if (isset($option['Fproduct_status']) && !empty($option['Fproduct_status'])) {
            $where['Fproduct_status'] = $option['Fproduct_status'];
        }

        $page = $option['p'] ? : 1;
        $page_size = $option['page_size'];

        $res['data']['count'] = $this->product_dao->productNum($where);
        $res['data']['list'] = $this->product_dao->productList($where, $page, $page_size);

        return $res;
    }

    public function add($data)
    {
        $ret = array('code' => 0);
        // 数据验证
        $validationConfig = array(
            array(
                'value' => $data['Fstore_id'],
                'rules' => 'required',
                'field' => '操作者'
            ),
            array(
                'value' => $data['Fproduct_name'],
                'rules' => 'required',
                'field' => '产品名称'
            ),
            array(
                'value' => $data['Fcategory_id'],
                'rules' => 'required',
                'field' => '产品分类'
            ),
            array(
                'value' => $data['Fproduct_price'],
                'rules' => 'required|price',
                'field' => '产品价格'
            ),
            array(
                'value' => $data['Fproduct_num'],
                'rules' => 'required',
                'field' => '产品库存'
            )
        );
        foreach ($validationConfig as $v) {
            $resValidation = validationData($v['value'], $v['rules'], $v['field']);
            if (!empty($resValidation)) {
                return $resValidation;
            }
        }
        $res = $this->product_dao->add($data);
        if (!$res) {
            $ret['code'] = 'system_error_2'; //操作出错
        }
        return $ret;
    }

    public function getProductByPid($where)
    {
        $ret = array('code' => 0);
        $res = $this->product_dao->getProductInfoByFId($where);
        $ret['data'] = $res;
        return $ret;
    }

    public function update($where, $data)
    {
        $ret = array('code' => 0);
        if (!isset($where['Fproduct_id']) && empty($where['Fproduct_id'])) {
            $ret['code'] = 'system_error_2'; // 操作出错
            return $ret;
        }
        $product = $this->product_dao->getProductInfoByFId($where);
        if (empty($product)) {
            $ret['code'] = 'product_error_2'; // 不存在
            return $ret;
        }
        $res = $this->product_dao->update($where, $data);
        if ($res) {
            return $ret;
        } else {
            return $ret['code'] = 'product_error_5';
        }
    }

    public function del($where)
    {
        $ret = array('code' => 0);
        if (!isset($where['Fproduct_id']) && empty($where['Fproduct_id'])) {
            $ret['code'] = 'system_error_2'; // 操作出错
            return $ret;
        }
        $product = $this->product_dao->getProductInfoByFId($where);
        if (empty($product)) {
            $ret['code'] = 'product_error_2'; // 不存在
            return $ret;
        }
        $res = $this->product_dao->del($where);
        if ($res) {
            return $ret;
        } else {
            return $ret['code'] = 'product_error_4';
        }
    }

    public function changeStatus($data, $where)
    {
        $ret = array('code' => 0);
        if (!isset($data['Fproduct_status']) && empty($data['Fproduct_status'])) {
            unset($data['Fproduct_status']);
        }
        if (!isset($data['Fis_del']) && empty($data['Fis_del'])) {
            unset($data['Fis_del']);
        }
        if (empty($data) || empty($where)) {
            $ret['code'] = 'system_error_2'; // 无信息
            return $ret;
        }
        if (empty($this->product_dao->getProductInfoByFId($where))) {
            $ret['code'] = 'product_error_2'; // 不存在
            return $ret;
        }
        $data['Fupdate_time'] = time();
        $res = $this->product_dao->changeStatus($data, $where);
        if ($res) {
            return $ret;
        } else {
            return $ret['code'] = 'product_error_9';
        }
    }

}