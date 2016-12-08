<?php
/**
 * Created by PhpStorm.
 * User: cren
 * Date: 16/7/9
 * Time: 上午1:49
 */

/**
 * 生成验证码接口
 */
function bornValidateCode()
{

}

/**
 * 初始化盐值
 * @return string
 */
function saltCode()
{
    $salt = '';
    $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $len = mt_rand(4, 8);
    for ($i = 0; $i < $len; $i++) {
        $salt .= $str[mt_rand(0, strlen($str) - 1)];
    }
    return $salt;
}

/**
 * 登录密码加密
 * @param int $type 登录类型 0: 管理员 1: 商户
 * @param string $salt 盐值
 * @param string $pwd 密码
 * @return string
 */
function encodePwd($salt, $pwd)
{
    $str = "HZ>@!.";
    return md5(md5($pwd . $str . $salt));
}

/**
 * 操作数据库时转义数据
 * @param $data
 * @return array|string
 */
function dbEscape($data)
{
    $tmp = '';
    if (is_array($data)) {
        $tmp = array();
        foreach ($data as $k => $v) {
            $tmp[$k] = dbEscape($v);
        }
    }
    if (is_string($data)) {
        $tmp = addslashes($data);
    } else {
        $tmp = $data;
    }
    return $tmp;
}

/**
 * 通过错误信息字段,获取错误码和错误信息
 * @param array $data // $data['code']] 错误信息码 如:validation_error_0 , $data['field'] 添加在错误信息字段 如:用户名
 * @return array
 */
function errorCode($data)
{
    $ci = &get_instance();
    $ci->config->load('error_code', TRUE);
    $error_code = $ci->config->item('error_code');
    isset($error_code[$data['code']]) && isset($data['field']) ? $error_code[$data['code']]['msg'] = $data['field'] . $error_code[$data['code']]['msg'] : '';
    return isset($error_code[$data['code']]) ? $error_code[$data['code']] : array('code' => 999999, 'msg' => '未知错误');
}

/**
 * 输出的json信息
 * @param $data
 * @return string
 */
//function outPutJsonData($data)
//{
//    if ($data['code'] !== 0) {
//        $data = errorCode($data);
//    }
//    isset($data['data']) ? filterOutData($data['data']) : '';
//    return json_encode($data, JSON_UNESCAPED_UNICODE);
//}

/**
 * 输出
 * @param $data
 * @param array $header
 */
function outputResponse($data, $header = array())
{
    if(isset($data['code']) and $data['code'])
    {
        $data = errorCode($data);
    }
    if(isset($data['data']) && is_array($data['data']) && isset($data['data'][0]))
    {
        $data['data'] = array('list' => $data['data']);
    }
    $data = json_encode($data, JSON_UNESCAPED_UNICODE);
    // 设置HTTP响应头信息
    $headerDefault = array(
        'Content-Type'      => 'application/json; charset=UTF-8'
    );
    $header = array_merge($header, $headerDefault);
    foreach($header as $k => $v)
    {
        header("{$k}: {$v}");
    }
    exit($data);
}

/**
 * 去除\',入库前处理的数据
 * @param $data
 * @return $data
 */
function filterOutData(&$data)
{
    if(is_array($data)){
        foreach ($data as &$d){
            filterOutData($d);
        }
    }
    if(is_string($data)){
        $data = stripslashes($data);
    }
    return $data;
}

/**
 * 验证数据
 * @param $data
 * @param $rules
 * @param $field // 添加在错误信息字段 如:用户名
 * @return array
 */
function validationData($data, $rules, $field)
{
    $rulesData = explode('|', $rules);
    foreach ($rulesData as $rule) {
        $res = array();
        $filter = preg_replace('/\[[0-9]*\]/', '', $rule);
        switch ($filter) {
            case 'required':
                if(strlen($data) === 0) {
                    $res['code'] = 'validation_error_5'; // 不能为空
                    $res['field'] = $field;
                }
                break;
            case 'numeric':
                if (!is_numeric($data)) {
                    $res['code'] = 'validation_error_4'; // 必须位数字
                    $res['field'] = $field;
                }
                break;
            case 'price':
                if (!preg_match('/^(0|[1-9][0-9]{0,9})(\.[0-9]{1,2})?$/', $data, $match)){
                    $res['field'] = $field;
                    $res['code'] = 'validation_error_6'; // 必须为价格
                }
                break;
            case 'min_length':
                preg_match('/[0-9]+/', $rule, $match);
                if (strlen($data) < $match[0]) {
                    $res['field'] = $field;
                    $res['code'] = 'validation_error_1'; // 字符数不足
                }
                break;
            case 'max_length':
                preg_match('/[0-9]+/', $rule, $match);
                if (strlen($data) > $match[0]) {
                    $res['code'] = 'validation_error_2'; // 字符数过多
                    $res['field'] = $field;
                }
                break;
            case 'email':
                if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $data, $match)) {
                    $res['field'] = '';
                    $res['code'] = 'validation_error_3'; // 邮箱不正确
                }
                break;
            default:
                echo "No find validation ";die;
                break;
        }
        if (!empty($res)) return $res;
    }
    return $res;
}

function get_client_ip($type = 0)
{
    $type = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL)
    {
        return $ip[$type];
    }

    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos)
            unset($arr[$pos]);
        $ip = trim($arr[0]);
    }
    else if (isset($_SERVER['REMOTE_ADDR']))
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    else if (isset($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }

    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

function json_encode_data($data, $format = JSON_UNESCAPED_UNICODE)
{
    return json_encode($data, $format);
}
function p($data) {
    exit(json_encode_data($data));
}

// 获取URL
function getBaseUrl($uri = '')
{
    return APP_NAME . '' . $uri;
}

function baseCssUrl($uri){
    return getBaseUrl('/static/css/' . $uri);
}

function baseJsUrl($uri){
    return getBaseUrl('/static/js/' . $uri);
}