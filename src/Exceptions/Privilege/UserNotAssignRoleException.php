<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 9/27/18
 * Time: 2:22 PM
 */

namespace App\Modules\Exceptions;


class UserNotAssignRoleException extends CustomValidationException
{
    public function __construct()
    {
        $message = '用户没有分配用户角色';

        $code = 0;

        parent::__construct($message, $code, null);
    }

}