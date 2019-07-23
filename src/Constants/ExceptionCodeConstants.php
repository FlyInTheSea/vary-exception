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

    const omit_msg = '未预见的错误';

    const omit_code = 10444;

    const array_destruct_msg = '数组进行析构错误';

    const array_destruct_code = 10009;

    const service_closed_msg = '%s服务已关闭';

    const service_closed_code = 10010;

    const service_arrear_msg = '%s服务已欠费';

    const service_arrear_code = 10011;

    const request_fail_msg = '%s请求出错';

    const request_fail_code = 10012;

    const user_not_assigned_role_msg = '用户没有分配用户角色';

    const user_not_assigned_role_code = 10013;

    const params_need_greater_than_zero_msg = '传递的参数应该大于0 实际传递的是%s';

    const params_need_greater_than_zero_code = 10014;

    const params_strict_valid_msg = '参数%s严格校验不通过';

    const params_strict_valid_code = 10015;

    const time_format_unvalid_msg = '%s时间格式无效';

    const time_format_unvalid_code = 10016;

    const out_map_range_msg = '%s 不在匹配范围';

    const out_map_range_code = 10017;
}