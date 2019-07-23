<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/19/18
 * Time: 3:25 PM
 */

namespace VaryException\Exceptions\WrongSituation;


use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ForbidThisActionInNowException extends VaryException
{
    public function __construct(
        string $status,
        string $operation
    ) {

        $code = ExceptionCodeConstants::forbid_this_action_now_code;

        $msg = sprintf(
            ExceptionCodeConstants::forbid_this_action_now_msg, $status, $operation
        );

        parent::__construct($msg, $code);
    }
}