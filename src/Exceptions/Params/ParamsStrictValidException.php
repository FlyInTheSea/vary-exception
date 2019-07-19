<?php

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Exception;

class ParamsStrictValidException extends Exception implements WillLogExceptionInterface
{
    public function __construct(
        array $params = []
    ) {
        $this->code = 400;

        $params        = implode(',', $params);

        if(empty($params)){
            $params = '传递过来的';
        }

        $this->message = sprintf("%s中的参数　严格校验不通过", $params);
    }
}

