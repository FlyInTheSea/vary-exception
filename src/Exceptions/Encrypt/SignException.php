<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 12/5/18
 * Time: 2:08 PM
 */

namespace App\Modules\Exceptions;


class SignException extends \Exception
{
    public function __construct(
        $message = "",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }

}