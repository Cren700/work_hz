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
        $where = array();

        if (isset($option['Fproduct_id'])) {
            $where[] = array('Fproduct_id' => $option['Fproduct_id']);
        }

        if (isset($option['Fcategory_id'])) {
            $where[] = array('Fcategory_id' => $option['Fcategory_id']);
        }

        if (isset($option['Fstore_id'])) {
            $where[] = array('Fstore_id' => $option['Fstore_id']);
        }

        if (isset($option['Fproduct_name'])) {
            $where[] = array('Fproduct_name' => $option['Fproduct_name']);
        }

        if (isset($option['Fproduct_status'])) {
            $where[] = array('Fproduct_status' => $option['Fproduct_status']);
        }

        $res['data'] = $this->product_dao->query($where);

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
                'value' => $data['Fproduct_price'],
                'rules' => 'required|price',
                'field' => '产品价格'
            ),
            array(
                'value' => $data['Fproduct_num'],
                'rules' => 'required',
                'field' => '产品数量'
            ),
            array(
                'value' => $data['Fcategory_id'],
                'rules' => 'required',
                'field' => '产品分类'
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
        $cate = $this->product_dao->getProductInfoByFId($where);
        if (empty($cate)) {
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

}