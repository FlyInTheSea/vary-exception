<?php

namespace App\Modules\Exceptions;

class ConfigNotCorrectSettedException extends \Exception
{
    public function __construct(
        $key,
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        $message = sprintf('%s 没有被正确的配置', $key);

        parent::__construct($message, $code, $previous);
    }
}

