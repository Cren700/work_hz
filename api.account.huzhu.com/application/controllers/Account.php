<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('service/account_service_model');
	}

	/**
	 * 添加用户接口
     * $user_type 用户类型 默认为4 (1、内部管理用户2、合作商户3、媒体用户4、普通用户)
     * $subscribe 是否订阅 0:否 1:是
	 */
	public function add()
	{
        $data = array();
		$data['Fuser_id'] = $this->input->post('user_id');
		$data['Fpasswd'] = $this->input->post('passwd');
		$data['Fuser_type'] = $this->input->post('Fuser_type') ? : 4;
        $data['Fcreate_time'] = time();
        $data['Fupdate_time']  = time();
        $data['Fstatus'] = 1;
		$res = $this->account_service_model->addAccount($data);
		echo outputResponse($res);
	}

    /**
     * 登录
     */
    public function login()
    {
        $data['Fuser_id'] = $this->input->post('user_id');
        $data['Fpasswd'] = $this->input->post('passwd');
        $res = $this->account_service_model->login($data);
        echo outputResponse($res);
    }

    /**
     * 更新密码
     */
    public function modifyPwd()
    {
        $data['Fuser_id'] = $this->input->post('user_id');
        $data['Fpasswd'] = $this->input->post('passwd');
        $data['new_passwd'] = $this->input->post('new_passwd');
        $res = $this->account_service_model->modifyPwd($data);
        echo outputResponse($res);
    }

    /**
     * 后台添加用户
     */
    public function addAdmin()
    {
        $data = array();
//        $data['Fuser_id'] = $this->input->post('user_id');
//        $data['Fpasswd'] = $this->input->post('passwd');
//        $data['Fnick_name'] = $this->input->post('nick_name');

        $data['Fuser_id'] = 'admin';
        $data['Fpasswd'] = '123456';
        $data['Fnick_name'] = 'aadmin';
        $data['Fuser_type'] = 1; // 用户类型 默认为4 (1、内部管理用户2、合作商户3、媒体用户4、普通用户)
        $data['Fcreate_time'] = time();
        $data['Fupdate_time']  = time();
        $data['Fstatus'] = 1;
        $data['Flevel'] = 1;
        $data['Fpid'] = 0;
        $res = $this->account_service_model->addAccount($data, 'admin');
        echo outputResponse($res);
    }

    /**
     * 登录
     */
    public function loginAdmin()
    {
        $data['Fuser_id'] = $this->input->post('user_id');
        $data['Fpasswd'] = $this->input->post('passwd');
        $res = $this->account_service_model->login($data, 'admin');
        echo outputResponse($res);
    }

    /**
     * 更新密码
     */
    public function modifyPwdAdmin()
    {
//        $data['Fuser_id'] = $this->input->post('user_id');
//        $data['Fpasswd'] = $this->input->post('passwd');
//        $data['new_passwd'] = $this->input->post('new_passwd');

        $data['Fuser_id'] = 'admin';
        $data['Fpasswd'] = '123456';
        $data['new_passwd'] = '654321';
        $res = $this->account_service_model->modifyPwd($data, 'admin');
        echo outputResponse($res);
    }

    /**
     * 用户详情
     */
    public function detail()
    {
        $data['Fuser_id'] = $this->input->get('user_id');
        $res = $this->account_service_model->detail($data);
        echo outputResponse($res);
    }

    /**
     * 添加用户详情
     */
    public function addDetail()
    {
        $data = array();
        $data['Fuser_id'] = $this->_user_id;
        $data['Fnick_name'] = $this->input->post('nick_name');
        $data['Freal_name'] = $this->input->post('real_name');
        $data['Fcert_type'] = $this->input->post('cert_type');
        $data['Fcert_no'] = $this->input->post('cert_no');
        $data['Fsex'] = $this->input->post('sex');
        $data['Femail'] = $this->input->post('email');
        $data['Fphone'] = $this->input->post('phone');
        $data['Fcountry'] = $this->input->post('country');
        $data['Fprovince'] = $this->input->post('province');
        $data['Fcity'] = $this->input->post('city');
        $data['Faddress'] = $this->input->post('address');
        $data['Fatte_status'] = $this->input->post('atte_status') ? : 0;
        $data['Fimage_path'] = $this->input->post('image_path');
        $data['Fcreate_time'] = time();
        $res = $this->account_service_model->addDetail($data);
        echo outputResponse($res);
    }

    /**
     * 修改用户详情
     */
    public function modifyDetail()
    {
        $data = array();
        $data['Fnick_name'] = $this->input->post('nick_name');
        $data['Freal_name'] = $this->input->post('real_name');
        $data['Fcert_type'] = $this->input->post('cert_type');
        $data['Fcert_no'] = $this->input->post('cert_no');
        $data['Fsex'] = $this->input->post('sex');
        $data['Femail'] = $this->input->post('email');
        $data['Fphone'] = $this->input->post('phone');
        $data['Fcountry'] = $this->input->post('country');
        $data['Fprovince'] = $this->input->post('province');
        $data['Fcity'] = $this->input->post('city');
        $data['Faddress'] = $this->input->post('address');
        $data['Fatte_status'] = $this->input->post('atte_status') ? : 0;
        $data['Fimage_path'] = $this->input->post('image_path');
        $data['Fupdate_time'] = time();
        $where = array('Fuser_id' => $this->_user_id);
        $res = $this->account_service_model->modifyDetail($where, $data);
        echo outputResponse($res);
    }
}
