<?php

namespace App\Modules\Exceptions;

use Throwable;

/**
 * Class ParseException
 * @package App\Modules\Exceptions
 */
class DelayJobException extends \Exception
{
    public $parse_info;

    private $exceptionInfo;

    private $illumination;

    public function __construct(
        $illumination,//析构的说明
        $parse_info,//析构的内容
        Throwable $exception_info//解析时抛出的异常
    )
    {
        $this->code = 400;

        $parse_info = json_encode($parse_info);

        $this->parse_info = $parse_info;

        $this->exceptionInfo = $exception_info;

        $this->message = sprintf("%s 数组析构失败", $illumination);

        $this->illumination = $illumination;
    }
}

