<?php

namespace App\Modules\Exceptions;

class SettingMissingException extends \Exception
{
    public function __construct(
        $field = "",
        $code = 400,
        \Throwable $previous = null
    ) {
        $message    = sprintf(
            "%s字段配置错误", $field
        );
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}

