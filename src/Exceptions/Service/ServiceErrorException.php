<?php

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Throwable;

class ServiceErrorException extends \Exception implements WillLogExceptionInterface
{
    private $serviceName;

    private $rawResponse;

    private $errorMessage;

    public function __construct(
        $service_name,
        $raw_response,
        $error_message = '',
        $code = 400,
        Throwable $previous = null
    ) {
        $this->errorMessage = $error_message;

        $this->serviceName = $service_name;

        $this->rawResponse = $raw_response;

        $this->code = $code;

        parent::__construct(
            sprintf("%s服务发生了错误 错误信息:%s", $service_name ?? '', $error_message),
            $code, $previous);
    }
}

