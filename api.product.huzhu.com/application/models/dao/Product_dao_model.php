<?php

/**
 * Product_dao_model.php
 * Author   : cren
 * Date     : 2016/11/28
 * Time     : 下午11:44
 */
class Product_dao_model extends HZ_Model
{
    private $_product_table = 't_product';
    private $p = null; // 产品库
    public function __construct()
    {
        parent::__construct();
        $this->p = $this->load->database('product', true);// 产品库
    }

    public function productNum($where) {
        $query = $this->p->select('count(*) as num')->where($where)->get($this->_product_table);

        $res = $query->row_array();
        return isset($res['num']) ? $res['num'] : 0;
    }

    public function productList($where, $page, $page_size) {
        $query = $this->p->order_by('Fproduct_id', 'DESC')->get_where($this->_product_table, $where, $page_size, $page_size * ($page - 1));
        return $query->result_array();
    }

    public function add($data)
    {
        return $this->p->insert($this->_product_table, $data);
    }


    public function getProductInfoByFId($where)
    {
        $query = $this->p->get_where($this->_product_table, $where);
        return $query->row_array();
    }

    public function update($where, $data)
    {
        return $this->p->update($this->_product_table, $data, $where);
    }

    public function del($where)
    {
        return $this->p->delete($this->_product_table, $where);
    }

    public function changeStatus($data, $where)
    {
        return $this->p->update($this->_product_table, $data, $where);
    }

}