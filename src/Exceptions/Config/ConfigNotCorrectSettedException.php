<?php

namespace VaryException\Exceptions\Config;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ConfigNotCorrectSettedException extends VaryException
{
    public function __construct(
        $key
    ) {
        $code = ExceptionCodeConstants::config_not_correct_setted_code;

        $message = sprintf(ExceptionCodeConstants::config_not_correct_setted_msg, $key);

        parent::__construct($message, $code, null);
    }
}

