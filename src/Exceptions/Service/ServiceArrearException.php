<?php

namespace VaryException\Exceptions\Service;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ServiceArrearException extends VaryException
{
    public function __construct(
        $service_name
    ) {
        $code = ExceptionCodeConstants::service_arrear_code;

        $message = sprintf(ExceptionCodeConstants::service_arrear_msg, $service_name);

        parent::__construct($message, $code);
    }
}

