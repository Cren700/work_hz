<?php

/**
 * Product_service_model.php
 * Author   : cren
 * Date     : 2016/11/30
 * Time     : 下午8:19
 */
class Product_service_model extends HZ_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function query($data)
    {
        return $this->myCurl('product', 'queryProduct', $data, false);
    }


    public function getProductByPid($data)
    {
        return $this->myCurl('product', 'getProductByPid', $data, false);
    }

    public function status($data)
    {
        return $this->myCurl('product', 'changeStatus', $data, true);
    }

    public function save($data)
    {
        $is_new = $data['is_new'];
        unset($data['is_new']);
        if ($is_new) {
            $res = $this->myCurl('product', 'addProduct', $data, true);
        } else {
            $res = $this->myCurl('product', 'updateProduct', $data, true);
        }
        if ($res['code'] === 0) {
            $res['data']['url'] = getBaseUrl('/product.html');
        }
        return $res;
    }

    public function del($data)
    {
        return $this->myCurl('product', 'delProduct', $data, false);
    }
}