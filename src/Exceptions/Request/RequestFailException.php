<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 4/19/19
 * Time: 1:49 PM
 */

namespace VaryException\Exceptions\Request;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class RequestFailException extends VaryException
{
    public function __construct(
        $request_illumination
    ) {
        $code = ExceptionCodeConstants::request_fail_code;

        $format = ExceptionCodeConstants::request_fail_msg;

        $message = sprintf($format, $request_illumination);

        parent::__construct($message, $code);
    }
}
