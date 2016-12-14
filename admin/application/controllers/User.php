<?php

/**
 * User.php
 * Author   : cren
 * Date     : 2016/11/27
 * Time     : 下午6:24
 */
class User extends BaseControllor
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service/user_service_model');
    }

    public function index()
    {
        $res = $this->user_service_model->detail();
        echo json_encode_data($res);
    }
    
    public function detail()
    {
        $jsArr = array(
            'plugin/jquery.placeholder.min.js',
            'plugin/jquery.validate.js',
            'uploadify/jquery.uploadify.min.js',
            'user/detail.js'
        );
        $cssArr = array('uploadify.css');
        $user = $this->user_service_model->detail();
        if (empty($user)){
            $data = array();
            $is_new = 1;
        } else {
            $data = $user['data'];
            $is_new = 0;
        }
        $this->smarty->assign('jsArr', $jsArr);
        $this->smarty->assign('cssArr', $cssArr);
        $this->smarty->assign('user', $data);
        $this->smarty->assign('is_new', $is_new);
        $this->smarty->display('user/detail.tpl');
    }

    /**
     * 用户详情
     */
    public function save()
    {
        $data = array();
        $data['is_new'] = $this->input->post('is_new'); // 是否添加
        $data['real_name'] = $this->input->post('real_name');
        $data['industry'] = $this->input->post('industry');
        $data['cert_type'] = $this->input->post('cert_type');
        $data['cert_no'] = $this->input->post('cert_no');
        $data['logo_path'] = $this->input->post('logo_path');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['country'] = $this->input->post('country');
        $data['address'] = $this->input->post('address');
        $data['annex_path'] = $this->input->post('annex_path');
        $data['remark'] = $this->input->post('remark');
        $data['atte_status'] = $this->input->post('atte_status');
        $res = $this->user_service_model->save($data);
        echo json_encode_data($res);
    }
}