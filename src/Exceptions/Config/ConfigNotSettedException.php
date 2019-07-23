<?php


namespace VaryException\Exceptions\Config;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ConfigNotSettedException extends VaryException
{
    public function __construct(
        $key
    ) {
        $code = ExceptionCodeConstants::config_not_setted_code;

        $message = sprintf(ExceptionCodeConstants::config_not_setted_msg, $key);

        parent::__construct($message, $code, null);
    }
}

