<?php

/**
 * Created by PhpStorm.
 * User: cren
 * Date: 16/7/9
 * Time: 上午1:34
 */
class HZ_Controller extends CI_Controller
{
    protected $_uid = null;
    protected $_user_id = null;
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        //Smarty

        require_once ROOT_PATH.'/system/third_party/smarty/Smarty.class.php';

        //创建一个smarty类的对象$smarty
        $this->smarty = new Smarty();

        //设置所有模板文件存放目录
        $this->smarty->template_dir = 'application/views';
        //设置所有编译过的模板文件的存放目录
        $this->smarty->compile_dir = 'application/cache/compiles/';
        //设置存放smarty缓存文件的目录
        $this->smarty->cache_dir = 'application/cache/caches/';
        //设置模板中所有特殊配置文件的存放目录
        $this->smarty->config_dir = 'application/third_party/smarty/configs/';

        //开启smarty缓存模板功能
        $this->smarty->caching = 0;

        //设置模板缓存有效时间段的长度为1天
        // $this->marty->cache_lifetime = 60 * 60 * 24;

        //设置模板语言中的左结束符，默认为“{”
        $this->smarty->left_delimiter = '<{';

        //设置模板语言中的右结束符，默认为“}”
        $this->smarty->right_delimiter = '}>';

        $seoArr = array('keywords' => '互助之家', 'description' => '互助之家', 'title' => '互助之家');
        $this->smarty->assign('seo', $seoArr);

        $this->smarty->assign('cssArr', array());
        $this->smarty->assign('jsArr', array());

        $this->_uid = $this->session->userdata('uid');
        $this->_user_id = $this->session->userdata('username');
        $this->smarty->assign('username', $this->_user_id);
        $this->smarty->assign('uid', $this->_uid);
    }

    public function jump($url)
    {
        header("Location: {$url}", true, 302);
        exit();
    }

    public function page($rows, $p = 1, $pageSize = 10, $url = '')
    {
        $this->load->library('pagination');
        $config['base_url'] = $url;
        $config['total_rows'] = $rows;
        $config['per_page'] = $pageSize;
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['prev_link'] = '&lt;';
        $config['next_link'] = '&gt;';
        $config['cur_page'] = $p; // 当前页数

        $config['use_page_numbers'] = TRUE;

        //把结果包在ul标签里
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        //自定义数字
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //当前页
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a><li>';
        //前一页
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        //后一页
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '<li>';

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }
}

class BaseControllor extends HZ_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->_uid)){
            $uri = rawurlencode($_SERVER['REQUEST_URI']);
            $this->jump('/login?url='.$uri);
            exit();
        }
    }


}