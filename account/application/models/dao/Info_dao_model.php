<?php

/**
 * Info_dao_model.php
 * Author   : cren
 * Date     : 2016/12/12
 * Time     : 下午10:24
 */
class Info_dao_model extends HZ_Model
{
    private $u = null;
    private $_tabel_user = 't_user';
    public function __construct()
    {
        parent::__construct();
        $this->a = $this->load->database('default', true);// 用户库
    }

    /**
     * 查询对应的用户数量
     * @param $where
     * @param $like
     * @return int
     */
    public function userCounts($where, $like) {
        $this->a->select('count(*) as num');
        $this->a->from($this->_tabel_user);
        $this->a->where($where);
        $this->a->like($like);
        $count = $this->a->count_all_results();
        return $count;
    }

    public function userList($where, $like, $page, $page_size) {
        $this->a->select('*');
        $this->a->from($this->_tabel_user);
        $this->a->where($where);
        $this->a->like($like);
        $this->a->limit($page_size, $page_size * ($page - 1));
        $query = $this->a->get();
        return $query->result_array();
    }
}