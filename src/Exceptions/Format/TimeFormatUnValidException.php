<?php

namespace App\Modules\Exceptions;


use VaryException\Exceptions\VaryException;

class TimeFormatUnValidException extends VaryException
{
    public function __construct(
        $field
    ) {
        $code = 400;

        $message = sprintf(
            '%s 时间格式转化发生错误', $field
        );

        parent::__construct($message,$code);
    }
}

