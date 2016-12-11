<?php

/**
 * Posts_service_model.php
 * Author   : cren
 * Date     : 2016/11/28
 * Time     : 下午11:39
 */
class Posts_service_model extends HZ_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dao/posts_dao_model', 'posts_dao');
    }
    
    public function query($option)
    {
        $res = array('code' => 0);
        $where = array('Fis_del' => '0');

        if (!empty($option['Fid'])) {
            $where['Fid'] = $option['Fid'];
        }

        if (!empty($option['Fuser_id'])) {
            $where['Fuser_id'] = $option['Fuser_id'];
        }

        if (!empty($option['Fcategory_id'])) {
            $where['Fcategory_id'] = $option['Fcategory_id'];
        }

        if (!empty($option['Fpost_status'])) {
            $where['Fpost_status'] = $option['Fpost_status'];
        }

        // like
        if (!empty($option['Fpost_title'])) {
            $where['Fpost_title'] = $option['Fpost_title'];
        }

        if (!empty($option['Fis_del'])) {
            $where['Fis_del'] = $option['Fis_del'];
        }

        $page = $option['p'] ? : 1;
        $page_size = $option['page_size'];
        $res['data']['count'] = $this->posts_dao->postsNum($where);
        $res['data']['list'] = $this->posts_dao->postsList($where, $page, $page_size);

        return $res;
    }

    public function add($data)
    {
        $ret = array('code' => 0);
        // 数据验证
        $validationConfig = array(
            array(
                'value' => $data['Fpost_title'],
                'rules' => 'required|min_length[10]|max_length[200]',
                'field' => '文章标题'
            ),
            array(
                'value' => $data['Fuser_id'],
                'rules' => 'required',
                'field' => '发布者'
            ),
            array(
                'value' => $data['Fpost_author'],
                'rules' => 'required',
                'field' => '文章作者'
            ),
            array(
                'value' => $data['Fcategory_id'],
                'rules' => 'required',
                'field' => '文章分类'
            ),
            array(
                'value' => $data['Fpost_content'],
                'rules' => 'required',
                'field' => '文章内容'
            )
        );
        foreach ($validationConfig as $v) {
            $resValidation = validationData($v['value'], $v['rules'], $v['field']);
            if (!empty($resValidation)) {
                return $resValidation;
            }
        }
        $res = $this->posts_dao->add($data);
        if (!$res) {
            $ret['code'] = 'system_error_2'; //操作出错
        }
        return $ret;
    }

    public function getPostsByPid($where)
    {
        $ret = array('code' => 0);
        $res = $this->posts_dao->getPostsByPid($where);
        $ret['data'] = $res;
        return $ret;
    }

    public function update($where, $data)
    {
        $ret = array('code' => 0);
        if (!isset($where['Fid']) && empty($where['Fid'])) {
            $ret['code'] = 'system_error_2'; // 操作出错
            return $ret;
        }
        $product = $this->posts_dao->getPostsByPid($where);
        if (empty($product)) {
            $ret['code'] = 'posts_error_2'; // 不存在
            return $ret;
        }
        $validationConfig = array(
            array(
                'value' => $data['Fuser_id'],
                'rules' => 'required',
                'field' => '发布者'
            ),
            array(
                'value' => $data['Fpost_author'],
                'rules' => 'required',
                'field' => '文章作者'
            ),
            array(
                'value' => $data['Fpost_content'],
                'rules' => 'required',
                'field' => '文章内容'
            ),
            array(
                'value' => $data['Fcategory_id'],
                'rules' => 'required',
                'field' => '文章分类'
            ),
            array(
                'value' => $data['Fpost_title'],
                'rules' => 'required|min_length[10]|max_length[200]',
                'field' => '文章标题'
            )
        );
        foreach ($validationConfig as $v) {
            $resValidation = validationData($v['value'], $v['rules'], $v['field']);
            if (!empty($resValidation)) {
                return $resValidation;
            }
        }

        $res = $this->posts_dao->update($where, $data);
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
        $product = $this->posts_dao->getPostsByPid($where);
        if (empty($product)) {
            $ret['code'] = 'posts_error_2'; // 不存在
            return $ret;
        }
        $res = $this->posts_dao->del($where);
        if ($res) {
            return $ret;
        } else {
            return $ret['code'] = 'product_error_4';
        }
    }

    public function changeStatus($data, $where)
    {
        $ret = array('code' => 0);
        if (!isset($data['Fproduct_status']) && empty($data['Fproduct_status'])) {
            unset($data['Fproduct_status']);
        }
        if (!isset($data['Fis_del']) && empty($data['Fis_del'])) {
            unset($data['Fis_del']);
        }
        if (empty($data) || empty($where)) {
            $ret['code'] = 'system_error_2'; // 无信息
            return $ret;
        }
        $product = $this->posts_dao->getPostsByPid($where);
        if (empty($product)) {
            $ret['code'] = 'posts_error_2'; // 不存在
            return $ret;
        }
        $data['Fupdate_time'] = time();
        $res = $this->posts_dao->changeStatus($data, $where);
        if ($res) {
            return $ret;
        } else {
            return $ret['code'] = 'posts_error_9';
        }
    }

}