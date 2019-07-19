<?php

namespace App\Modules\Exceptions;

class UnExceptedValException extends \Exception
{
    public function __construct(
        $field = "不合理的字段值",
        $code = 400,
        \Throwable $previous = null
    ) {
        $message    = sprintf(
            "%s", $field
        );
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}

