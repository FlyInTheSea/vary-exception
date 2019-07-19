<?php

namespace App\Modules\Exceptions;

class FileSyncedUnFinishedException extends \Exception
{
    public function __construct(
        $message = '图片没有同步完成',
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message, $code, $previous);
    }
}

