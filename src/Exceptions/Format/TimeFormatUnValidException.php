<?php

namespace VaryException\Exceptions\Format;


use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class TimeFormatUnValidException extends VaryException
{
    public function __construct(
        $field
    ) {
        $code =
            ExceptionCodeConstants::time_format_unvalid_code;

        $message = sprintf(
            ExceptionCodeConstants::time_format_unvalid_msg, $field
        );

        parent::__construct($message, $code);
    }
}

