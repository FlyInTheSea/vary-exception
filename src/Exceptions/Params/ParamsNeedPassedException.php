<?php

namespace App\Modules\Exceptions;

class ParamsNeedPassedException extends \Exception
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

