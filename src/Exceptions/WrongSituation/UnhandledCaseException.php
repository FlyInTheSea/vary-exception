<?php


namespace VaryException\Exceptions\WrongSituation;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class UnhandledCaseException extends VaryException
{
    public function __construct(
        string $thing,
        string $case
    ) {

        $code = ExceptionCodeConstants::unhandled_case_code;

        $msg = sprintf(
            ExceptionCodeConstants::unhandled_case_msg, $thing, $case
        );

        parent::__construct($msg, $code);
    }
}

