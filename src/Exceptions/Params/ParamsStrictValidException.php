<?php

namespace VaryException\Exceptions\Params;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ParamsStrictValidException extends VaryException
{
    public function __construct(
        $param
    ) {
        $code = ExceptionCodeConstants::params_strict_valid_code;

        $message = sprintf(
            ExceptionCodeConstants::params_strict_valid_msg, $param
        );

        parent::__construct($message, $code);
    }
}

