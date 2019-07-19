<?php

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;

class TimeFormatUnValidException extends \Exception implements WillLogExceptionInterface
{
    public function __construct(
        $field
    ) {
        $this->code = 400;

        $this->message = sprintf(
            '%s 时间格式转化发生错误', $field
        );
    }
}

