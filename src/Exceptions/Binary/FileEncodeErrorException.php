<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/17/18
 * Time: 2:00 PM
 */

namespace App\Modules\Exceptions;


class FileEncodeErrorException extends \Exception
{
    public function __construct(
        $message = "文件编码格式错误",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}