<?php

use \Illuminate\Support\Facades\DB;
/**
 * 检测数据是否符合正则
 * @param array $mod 数据名=》正则 限制数组
 * @param array $data_array 数据数组
 * @return bool
 */
function check(array $mod, array $data_array) { //$mod为数据数组键名对应数据的正则, $data_array为数据数组
    foreach ($data_array as $key => $value) { //$data_array的键名在$mod数组中必有对应  若无请检查调用时有无逻辑漏洞
        if (!preg_match($mod[$key], $value)) {
            if (env('APP_DEBUG')) {
                echo "mod: " . $mod[$key] . "</br>value: " . $value . "</br>";
            }
            return false; //数据有误
        }
    }

    return true;
}

/**
 * 设置返回值
 * @param $code
 * @param $msg
 * @return string
 */
function msg($code, $msg) {
    $status = array(
        0 => '成功',
        1 => '缺失参数',
        2 => '账号密码错误',
        3 => '错误访问',
        4 => '未知错误',
        5 => '其他错误',
        6 => '未登录',
    );

    $result = array(
        'code' => $code,
        'status' => $status[$code],
        'data' => $msg
    );

    return json_encode($result, JSON_UNESCAPED_UNICODE);
}

/**用于返回需要的文章， 类型（即所在的地方）  以及数量
 * @param $type
 * @param $limit
 * @param $column
 * @param $direction
 * @return array
 */
function postInfo($type, $limit, $column, $direction) {
    $result = DB::table('posts')->where('type', $type)
        ->orderBy($column, $direction)->limit($limit)->get()->toArray();

    return $result;
}
