<?php

namespace App\Modules\Exceptions;

use Exception;

class UnhandledException extends Exception
{
    public function __construct(
        $message,
        $id
    ) {
        $this->code = 400;

        $this->message = sprintf('%s  :流程中未处理的情况:%s', $message, $id);

        parent::__construct($this->message, $this->code, null);
    }
}

