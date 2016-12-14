<?php

/**
 * Info_service_model.php
 * Author   : cren
 * Date     : 2016/12/12
 * Time     : 下午10:13
 */
class Info_service_model extends HZ_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dao/info_dao_model', 'info_dao');
    }

    public function query($option)
    {
        $res = array('code' => 0);
        $where = $like = array();

        if (!empty($option['Fuser_type'])) {
            $where['Fuser_type'] = $option['Fuser_type'];
        }

        if (!empty($option['Fstatus'])) {
            $where['Fstatus'] = $option['Fstatus'];
        }

        if (!empty($option['min_date'])) {
            $where['Fcreate_time >= '] = $option['min_date'];
        }

        if (!empty($option['max_date'])) {
            $where['Fcreate_time <= '] = $option['max_date'];
        }

        if (!empty($option['Fuser_id'])) {
            $like['Fuser_id'] = $option['Fuser_id'];
        }

        $page = $option['p'] ? : 1;
        $page_size = $option['page_size'];

        $res['data']['count'] = $this->info_dao->userCounts($where, $like);
        $res['data']['list'] = $this->info_dao->userList($where, $like, $page, $page_size);

        return $res;
    }
}