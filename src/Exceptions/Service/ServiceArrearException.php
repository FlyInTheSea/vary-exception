<?php

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Exception;

class ServiceArrearException extends Exception implements WillLogExceptionInterface
{
    private $serviceName;

    public function __construct(
        $service_name
    ) {
        $this->code = 400;

        $this->serviceName = $service_name;

        $this->message = sprintf("%s服务欠费", $service_name);
    }
}

