<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 7/19/19
 * Time: 11:03 AM
 */

namespace VaryException\Constants;


class ExceptionCodeConstants
{
    const file_encode_error_code = 10001;

    const file_encode_error_code_msg = '文件编码格式错误';

    const positive_integer_needed_code = 10002;

    const positive_integer_needed_msg = '参数必须正整数';


    const config_not_correct_setted_code = 10003;

    const config_not_correct_setted_msg = '填写的配置: %s 错误';

    const config_not_setted_code = 10004;

    const config_not_setted_msg = '未填写配置: %s';

    const same_record_exist_code = 10005;

    const same_record_exist_msg = '表 %s 中的记录已经存在';

    const encrypt_error_code = 10006;

    const encrypt_error_msg = '签名不合法';

    const unhandled_case_msg = '处理 %s 时候遇到未处理的情形 %s';

    const unhandled_case_code = 10007;

    const forbid_this_action_now_msg = '当前状态 %s 不支持此%s 操作';

    const forbid_this_action_now_code = 10008;


}