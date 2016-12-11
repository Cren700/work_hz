<?php

/**
 * Created by PhpStorm.
 * User: cren
 * Date: 16/7/9
 * Time: 下午2:37
 */
class Login extends HZ_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service/account_service_model');
    }

    /**
     * 登录页
     */
    public function index()
    {
        $uri = $this->input->get('url');
        $this->smarty->assign('uri', $uri);
        $this->smarty->display('login/index.tpl');
    }

    /**
     * 登录接口
     */
    public function doLogin()
    {
        $user_id = $this->input->post('user_id');
        $passwd = $this->input->post('passwd');
        $uri = $this->input->post('uri');
        $res = $this->account_service_model->login($user_id, $passwd);
        if ($res['code'] ===0) {
            $res['data']['url'] = $uri ? HOST_URL . $uri : getBaseUrl('/home.html');
        }
        echo json_encode_data($res);
    }

    /**
     * 退出登录
     */
    public function logOut()
    {
        $this->session->sess_destroy();
        $res = array('code' => 0, 'data' => array('url' => getBaseUrl('/home.html')));
        echo json_encode_data($res);
    }
}
