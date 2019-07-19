<?php

namespace App\Modules\Exceptions;

class UnCatchCaseInSwitchException extends \Exception
{
    public function __construct(
        $message = "没有捕捉到的类型",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}

