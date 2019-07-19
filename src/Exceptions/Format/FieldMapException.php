<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/14/18
 * Time: 1:23 AM
 */

namespace App\Modules\Exceptions;


class FieldMapException extends \Exception
{
    public function __construct(
        $message = "向　service 传递参数错误",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}
