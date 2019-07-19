<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/19/18
 * Time: 3:25 PM
 */

namespace App\Modules\Exceptions;


class ForbidThisActionInThisStatusException extends \Exception
{
    public function __construct(
        $message = "当前状态不支持此操作",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}