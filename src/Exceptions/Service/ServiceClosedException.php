<?php

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Throwable;

class ServiceClosedException extends \Exception implements WillLogExceptionInterface
{
    public function __construct(
        $service_name
    ) {
        $this->code = 400;

        $this->message = sprintf("%s服务已经关闭", $service_name);
    }

}

