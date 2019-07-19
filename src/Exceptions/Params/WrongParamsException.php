<?php

namespace App\Modules\Exceptions;

class WrongParamsException extends \Exception
{
    public function __construct(
        $message = '参数不对',
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}

