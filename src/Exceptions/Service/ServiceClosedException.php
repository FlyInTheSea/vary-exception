<?php

namespace VaryException\Exceptions\Service;


use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class ServiceClosedException extends VaryException
{
    public function __construct(
        $service_name
    ) {
        $code = ExceptionCodeConstants::service_closed_code;

        $message = sprintf(ExceptionCodeConstants::service_closed_msg, $service_name);

        parent::__construct($message, $code);
    }

}

