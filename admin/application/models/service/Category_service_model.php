<?php

/**
 * Category_service_model.php
 * Author   : cren
 * Date     : 2016/11/30
 * Time     : 下午8:25
 */
class Category_service_model extends HZ_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->myCurl('product', 'category', array());
    }


    public function getCategory($data)
    {
        return $this->myCurl('product', 'getCategory', $data, false);
    }

    public function save($data)
    {
        $is_new = $data['is_new'];
        unset($data['is_new']);
        if ($is_new) {
            return $this->myCurl('product', 'addCategory', $data, true);
        } else {
            return $this->myCurl('product', 'updateCategory', $data, true);
        }
    }

    public function del($data)
    {
        return $this->myCurl('product', 'delCategory', $data, false);
    }
}